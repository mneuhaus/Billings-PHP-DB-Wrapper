<?php
/**
* 
*/
class Base extends SQLite3 {
    function __construct($value=null,$property=null)
    {
		$path = "/Users/mneuhaus/Sites/billings-sync/data/billings.db";
		$dsn = 'sqlite:'.$path;
		
		$this->open($path);
		$this->class = get_class($this);
		
		if($value != null && $property!= null)
			$this->load($value,$property);
		else if($value != null)
			$this->load($value);
	}
	
	public function __call($name,$arguments) {
		if(count($arguments)>0){
			$value = $arguments[0];
		}

		switch (true) {
			// Magic Setter Function: setProperty($value) sets $this->property = $value;
			case substr($name,0,3) == "set":
				$this->_set($name,$value);
				break;

			// Magic Setter Function: getProperty() return $this->property
			case substr($name,0,3) == "get":
				return $this->_get($name);
				break;
				
			// Magic Setter Function: getProperty() return $this->property
			case substr($name,0,strlen("findOneBy")) == "findOneBy":
				return $this->_findOneBy($name,$value);
				break;
				
			// Magic Setter Function: getProperty() return $this->property
			case substr($name,0,strlen("findBy")) == "findBy":
				return $this->_findBy($name,$value);
				break;

			// // Magic Setter Function: getProperty() return $this->property
			// case substr($name,0,3) == "add":
			// 	$this->_add($name,$value);
			// 	break;
			// 
			// case substr($name,0,3) == "has":	
			// 	return $this->_has($name,$value);
			// 	break;
			// 
			// case substr($name,0,6) == "remove":	
			// 	return $this->_remove($name,$value);
			// 	break;

			default:
				echo "trying to call".$name."<br />";
				break;
		}
	}

    public function getPropertyName($property = null){
        $properties = get_class_vars(get_class($this));
        foreach($properties as $p => $value){
            if(strtolower($property) == strtolower($p)){
                return $p;
            }
        }
        return false;
    }

	public function _set($name,$value){
		$property = $this->getPropertyName(substr($name,3));
		if($property === false)
			throw new \Exception('The Property '.$property.' you are trying to set isn\'t defined in this class '.get_class($this).".");
			
		$this->$property = $value;
	}

	public function _get($name){
        $property = $this->getPropertyName(substr($name,3));
		if($property === false)
			throw new \Exception('The Property '.$property.' you are trying to get isn\'t defined in this class.');
		if ($this->$property instanceof \F3\FLOW3\Persistence\LazyLoadingProxy) {
			$this->$property->_loadRealInstance();
		}
		if(is_object($this->$property))
			return clone $this->$property;
		else
			return $this->$property;
	}
	
	public function _findOneBy($name,$value){
		$property = $this->getPropertyName(substr($name,strlen("findOneBy")));
		
#		echo "SELECT * FROM ".get_class($this)." WHERE ".$property."='".$value."';";
		$results = $this->query("SELECT * FROM ".get_class($this)." WHERE ".$property."='".$value."';");
		if(count($results) > 0){
			$row = $results->fetchArray();
			$object = new $this->class();
			return $object->fromArray($row);
		}
		return false;
	}
	
	public function _findBy($name){
		$property = $this->getPropertyName(substr($name,strlen("findBy")));
		$results = $this->query("SELECT * FROM ".get_class($this)." WHERE ".$property."='".$value."';");
		if(count($results) > 0){
			$objects = array();
			while ($row = $results->fetchArray()) {
				$object = new $this->class();
				$objects[] = $object->fromArray($row);
			}
			return $objects;
		}
		return false;
	}
	
	public function toArray(){
		$array = array();
		$properties = get_class_vars(get_class($this));
		foreach($properties as $property => $value){
			$value = $this->$property;
			
			if(is_object($value) && is_callable(array($value,"__toString"))){
				$array[$property] = strval($value);
			}else{
				$array[$property] = $value;
			}
		}
		return $array;
	}

    public function fromArray($array){
		$this->array = $array;
		$properties = get_class_vars(get_class($this));
		foreach($properties as $property => $value){
				$this->$property = $array[$property];
		}
		return $this;
	}
	
	public function getChanges(){
		$tmp = array_diff_assoc($this->toArray(),$this->array);
		$changes = array();
		foreach ($tmp as $key => $value) {
			$changes[]= $key." = '".$value."'";
		}
		return $changes;
	}
	
	public function getValues(){
		$values = array();
		foreach ($this->toArray() as $key => $value) {
			if(empty($value))
				$values[] = "NULL";
			else
				$values[]= "'".$value."'";
		}
		return $values;
	}
	
	public function save(){
		$this->modifyDate = time();
		$this->foreignAppName = "Billings-Sync";
		if(!empty($this->_rowid)){
			$changes = $this->getChanges();
			if(count($changes) > 0){
				$query = "UPDATE ".get_class($this)." SET ".implode(", ",$changes)." WHERE _rowid='".$this->_rowid."';";
				$results = $this->exec($query);
			}
		}else{
			$this->_rowid = $this->getNextId();
			$this->uuid = $this->getUUID();
			$this->createDate = time();
			$query = "INSERT INTO ".get_class($this);
			$query.= " (".implode(", ",array_keys(get_class_vars(get_class($this)))).") ";
			$query.= " VALUES (".implode(", ",$this->getValues()).") ;";
			$results = $this->exec($query);
		}
	}
	
	public function load($value,$property = "_rowid"){
		$object = $this->_findOneBy("findOneBy".$property,$value);
		if($object->$property == $value)
			$this->fromArray($object->toArray());
	}
	
	private function getNextId(){
		$results = $this->query("SELECT * FROM EO_PK WHERE tableName='".get_class($this)."';");
		$row = $results->fetchArray();
		$pk = $row["nextPKey"];
		$this->exec("UPDATE EO_PK SET nextPKey ='".($pk+100)."' WHERE tableName='".get_class($this)."';");
		return $pk;
	}
	
	public function getUUID($value = null){
		if($value == null)
			$value = get_class($this).$this->_rowid;
			
		return strtoupper(UUID::v3("3006b9e0-b66a-11df-8d81-0800200c9a66",$value));
	}
	
	public function getId(){
		return $this->_rowid;
	}
}

class UUID {
  public static function v3($namespace, $name) {
    if(!self::is_valid($namespace)) return false;

    // Get hexadecimal components of namespace
    $nhex = str_replace(array('-','{','}'), '', $namespace);

    // Binary Value
    $nstr = '';

    // Convert Namespace UUID to bits
    for($i = 0; $i < strlen($nhex); $i+=2) {
      $nstr .= chr(hexdec($nhex[$i].$nhex[$i+1]));
    }

    // Calculate hash value
    $hash = md5($nstr . $name);

    return sprintf('%08s-%04s-%04x-%04x-%12s',

      // 32 bits for "time_low"
      substr($hash, 0, 8),

      // 16 bits for "time_mid"
      substr($hash, 8, 4),

      // 16 bits for "time_hi_and_version",
      // four most significant bits holds version number 3
      (hexdec(substr($hash, 12, 4)) & 0x0fff) | 0x3000,

      // 16 bits, 8 bits for "clk_seq_hi_res",
      // 8 bits for "clk_seq_low",
      // two most significant bits holds zero and one for variant DCE1.1
      (hexdec(substr($hash, 16, 4)) & 0x3fff) | 0x8000,

      // 48 bits for "node"
      substr($hash, 20, 12)
    );
  }

  public static function v4() {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

      // 32 bits for "time_low"
      mt_rand(0, 0xffff), mt_rand(0, 0xffff),

      // 16 bits for "time_mid"
      mt_rand(0, 0xffff),

      // 16 bits for "time_hi_and_version",
      // four most significant bits holds version number 4
      mt_rand(0, 0x0fff) | 0x4000,

      // 16 bits, 8 bits for "clk_seq_hi_res",
      // 8 bits for "clk_seq_low",
      // two most significant bits holds zero and one for variant DCE1.1
      mt_rand(0, 0x3fff) | 0x8000,

      // 48 bits for "node"
      mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
  }

  public static function v5($namespace, $name) {
    if(!self::is_valid($namespace)) return false;

    // Get hexadecimal components of namespace
    $nhex = str_replace(array('-','{','}'), '', $namespace);

    // Binary Value
    $nstr = '';

    // Convert Namespace UUID to bits
    for($i = 0; $i < strlen($nhex); $i+=2) {
      $nstr .= chr(hexdec($nhex[$i].$nhex[$i+1]));
    }

    // Calculate hash value
    $hash = sha1($nstr . $name);

    return sprintf('%08s-%04s-%04x-%04x-%12s',

      // 32 bits for "time_low"
      substr($hash, 0, 8),

      // 16 bits for "time_mid"
      substr($hash, 8, 4),

      // 16 bits for "time_hi_and_version",
      // four most significant bits holds version number 5
      (hexdec(substr($hash, 12, 4)) & 0x0fff) | 0x5000,

      // 16 bits, 8 bits for "clk_seq_hi_res",
      // 8 bits for "clk_seq_low",
      // two most significant bits holds zero and one for variant DCE1.1
      (hexdec(substr($hash, 16, 4)) & 0x3fff) | 0x8000,

      // 48 bits for "node"
      substr($hash, 20, 12)
    );
  }

  public static function is_valid($uuid) {
    return preg_match('/^\{?[0-9a-f]{8}\-?[0-9a-f]{4}\-?[0-9a-f]{4}\-?'.
                      '[0-9a-f]{4}\-?[0-9a-f]{12}\}?$/i', $uuid) === 1;
  }
}

?>
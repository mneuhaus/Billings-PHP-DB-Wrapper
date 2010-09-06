<?php

class Project extends Base{

	/**
	 *
	 * @var double
	 */
	var $balance;

	/**
	 *
	 * @var int
	 */
	var $clientID;

	/**
	 *
	 * @var datetime
	 */
	var $completeDate;

	/**
	 *
	 * @var datetime
	 */
	var $createDate;

	/**
	 *
	 * @var double
	 */
	var $discount;

	/**
	 *
	 * @var datetime
	 */
	var $dueDate;

	/**
	 *
	 * @var char
	 */
	var $extraField1;

	/**
	 *
	 * @var char
	 */
	var $extraField2;

	/**
	 *
	 * @var char
	 */
	var $extraField3;

	/**
	 *
	 * @var char
	 */
	var $extraField4;

	/**
	 *
	 * @var char
	 */
	var $extraField5;

	/**
	 *
	 * @var char
	 */
	var $extraField6;

	/**
	 *
	 * @var char
	 */
	var $extraField7;

	/**
	 *
	 * @var char
	 */
	var $extraField8;

	/**
	 *
	 * @var char
	 */
	var $foreignAppEntityName;

	/**
	 *
	 * @var char
	 */
	var $foreignAppImportID;

	/**
	 *
	 * @var datetime
	 */
	var $foreignAppLastTouchDate;

	/**
	 *
	 * @var char
	 */
	var $foreignAppName;

	/**
	 *
	 * @var char
	 */
	var $foreignAppUser;

	/**
	 *
	 * @var datetime
	 */
	var $modifyDate;

	/**
	 *
	 * @var char
	 */
	var $name;

	/**
	 *
	 * @var char
	 */
	var $nickname;

	/**
	 *
	 * @var char
	 */
	var $objective;

	/**
	 *
	 * @var char
	 */
	var $poNumber;

	/**
	 *
	 * @var char
	 */
	var $projectCode;

	/**
	 *
	 * @var longlong
	 */
	var $_rowid;

	/**
	 *
	 * @var int
	 */
	var $stageID;

	/**
	 *
	 * @var datetime
	 */
	var $startDate;

	/**
	 *
	 * @var int
	 */
	var $stateID;

	/**
	 *
	 * @var double
	 */
	var $total;

	/**
	 *
	 * @var int
	 */
	var $useNickname;

	/**
	 *
	 * @var char
	 */
	var $uuid;

	/**
	 *
	 * @var double
	 */
	var $totalCached;

	/**
	 *
	 * @var double
	 */
	var $unbilledCached;

	/**
	 *
	 * @var double
	 */
	var $incompleteCached;

	/**
	 *
	 * @var double
	 */
	var $estimatePendingCached;

	/**
	 *
	 * @var long
	 */
	var $durationOfSlipsCached;
	
	public function __construct($value=null, $property=null){
		parent::__construct($value,$property);
		
	}

}

?>
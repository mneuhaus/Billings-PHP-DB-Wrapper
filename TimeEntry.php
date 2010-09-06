<?php

class TimeEntry extends Base{

	/**
	 *
	 * @var char
	 */
	var $comment;

	/**
	 *
	 * @var datetime
	 */
	var $createDate;

	/**
	 *
	 * @var datetime
	 */
	var $endDateTime;

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
	 * @var int
	 */
	var $isManual = 1;

	/**
	 *
	 * @var datetime
	 */
	var $modifyDate;

	/**
	 *
	 * @var datetime
	 */
	var $startDateTime;

	/**
	 *
	 * @var longlong
	 */
	var $_rowid;

	/**
	 *
	 * @var int
	 */
	var $timeSlipID;

	/**
	 *
	 * @var char
	 */
	var $uuid;
	
	
	public function setTime($from, $to){
		$this->startDateTime = $from;
		$this->endDateTime = $to;
	}
}

?>
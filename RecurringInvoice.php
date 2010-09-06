<?php

class RecurringInvoice extends Base{

	/**
	 *
	 * @var longlong
	 */
	var $_rowid;

	/**
	 *
	 * @var int
	 */
	var $clientID;

	/**
	 *
	 * @var datetime
	 */
	var $lastSentDate;

	/**
	 *
	 * @var datetime
	 */
	var $nextSendDate;

	/**
	 *
	 * @var datetime
	 */
	var $modifyDate;

	/**
	 *
	 * @var int
	 */
	var $recurMonths;

	/**
	 *
	 * @var int
	 */
	var $recurDay;

	/**
	 *
	 * @var char
	 */
	var $templatePath;

	/**
	 *
	 * @var char
	 */
	var $name;

	/**
	 *
	 * @var datetime
	 */
	var $lastPlannedSendDate;

	/**
	 *
	 * @var int
	 */
	var $includeUnbilled;

}

?>
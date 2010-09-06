<?php

class ProFormaInvoice extends Base{

	/**
	 *
	 * @var int
	 */
	var $billingsFileID;

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
	var $dueDate;

	/**
	 *
	 * @var datetime
	 */
	var $invoiceDate;

	/**
	 *
	 * @var datetime
	 */
	var $modifyDate;

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
	 * @var int
	 */
	var $userFileID;

	/**
	 *
	 * @var char
	 */
	var $name;

	/**
	 *
	 * @var char
	 */
	var $slipList;

	/**
	 *
	 * @var char
	 */
	var $templatePath;

	/**
	 *
	 * @var double
	 */
	var $total;

	/**
	 *
	 * @var double
	 */
	var $retainerAmountApplied;

	/**
	 *
	 * @var char
	 */
	var $customizationValues;

}

?>
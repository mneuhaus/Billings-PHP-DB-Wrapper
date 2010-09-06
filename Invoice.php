<?php

class Invoice extends Base{

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
	 * @var int
	 */
	var $compoundSecondaryTax;

	/**
	 *
	 * @var int
	 */
	var $consolidatedTaxID;

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
	 * @var datetime
	 */
	var $invoiceDate;

	/**
	 *
	 * @var longlong
	 */
	var $_rowid;

	/**
	 *
	 * @var char
	 */
	var $invoiceNumber;

	/**
	 *
	 * @var double
	 */
	var $markup;

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
	 * @var datetime
	 */
	var $sentDate;

	/**
	 *
	 * @var int
	 */
	var $state;

	/**
	 *
	 * @var double
	 */
	var $tax1;

	/**
	 *
	 * @var char
	 */
	var $tax1Name;

	/**
	 *
	 * @var double
	 */
	var $tax2;

	/**
	 *
	 * @var char
	 */
	var $tax2Name;

	/**
	 *
	 * @var datetime
	 */
	var $taxPointDate;

	/**
	 *
	 * @var int
	 */
	var $useTax1;

	/**
	 *
	 * @var int
	 */
	var $useTax2;

	/**
	 *
	 * @var int
	 */
	var $userFileID;

	/**
	 *
	 * @var int
	 */
	var $clientID;

	/**
	 *
	 * @var int
	 */
	var $projectID;

	/**
	 *
	 * @var longlong
	 */
	var $invoiceHtmlID;

	/**
	 *
	 * @var double
	 */
	var $totalCached;

}

?>
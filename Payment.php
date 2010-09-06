<?php

class Payment extends Base{

	/**
	 *
	 * @var double
	 */
	var $cachedAppliedAmount;

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
	 * @var int
	 */
	var $methodID;

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
	 * @var longlong
	 */
	var $_rowid;

	/**
	 *
	 * @var int
	 */
	var $projectID;

	/**
	 *
	 * @var double
	 */
	var $total;

	/**
	 *
	 * @var int
	 */
	var $clientID;

	/**
	 *
	 * @var double
	 */
	var $baseCurrencyTotal;

	/**
	 *
	 * @var int
	 */
	var $baseCurrencyManuallyEntered;

}

?>
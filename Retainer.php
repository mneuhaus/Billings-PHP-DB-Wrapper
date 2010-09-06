<?php

class Retainer extends Base{

	/**
	 *
	 * @var double
	 */
	var $amountApplied;

	/**
	 *
	 * @var datetime
	 */
	var $createDate;

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
	 * @var int
	 */
	var $projectID;

	/**
	 *
	 * @var longlong
	 */
	var $_rowid;

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
	 * @var char
	 */
	var $comment;

	/**
	 *
	 * @var int
	 */
	var $methodID;

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
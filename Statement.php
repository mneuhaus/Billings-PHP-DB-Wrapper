<?php

class Statement extends Base{

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
	var $billingsFileID;

	/**
	 *
	 * @var int
	 */
	var $userFileID;

	/**
	 *
	 * @var datetime
	 */
	var $sentDate;

	/**
	 *
	 * @var char
	 */
	var $comment;

	/**
	 *
	 * @var datetime
	 */
	var $fromDate;

	/**
	 *
	 * @var datetime
	 */
	var $toDate;

	/**
	 *
	 * @var double
	 */
	var $totalBalance;

	/**
	 *
	 * @var double
	 */
	var $currentDue;

	/**
	 *
	 * @var double
	 */
	var $overdue30Days;

	/**
	 *
	 * @var double
	 */
	var $overdue60Days;

	/**
	 *
	 * @var double
	 */
	var $overdue90Days;

	/**
	 *
	 * @var double
	 */
	var $overdueOver90Days;

	/**
	 *
	 * @var char
	 */
	var $statementNumber;

}

?>
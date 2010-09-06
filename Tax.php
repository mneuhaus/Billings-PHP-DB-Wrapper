<?php

class Tax extends Base{

	/**
	 *
	 * @var int
	 */
	var $active;

	/**
	 *
	 * @var int
	 */
	var $compound;

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
	 * @var char
	 */
	var $name;

	/**
	 *
	 * @var int
	 */
	var $orderIndex;

	/**
	 *
	 * @var int
	 */
	var $parentTaxID;

	/**
	 *
	 * @var double
	 */
	var $rate;

	/**
	 *
	 * @var char
	 */
	var $registrationNum;

	/**
	 *
	 * @var longlong
	 */
	var $_rowid;

}

?>
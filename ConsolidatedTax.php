<?php

class ConsolidatedTax extends Base{

	/**
	 *
	 * @var int
	 */
	var $active;

	/**
	 *
	 * @var int
	 */
	var $atomic;

	/**
	 *
	 * @var longlong
	 */
	var $_rowid;

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
	var $parentConsolidatedTaxID;

}

?>
<?php

class Currency extends Base{

	/**
	 *
	 * @var longlong
	 */
	var $_rowid;

	/**
	 *
	 * @var char
	 */
	var $name;

	/**
	 *
	 * @var char
	 */
	var $currencyCode;

	/**
	 *
	 * @var char
	 */
	var $currencySymbol;

	/**
	 *
	 * @var float
	 */
	var $exchangeRateToBase;

	/**
	 *
	 * @var datetime
	 */
	var $exchangeRateDate;

	/**
	 *
	 * @var int
	 */
	var $isBaseCurrency;

	/**
	 *
	 * @var int
	 */
	var $active;

	/**
	 *
	 * @var char
	 */
	var $localeIdentifier;

	/**
	 *
	 * @var char
	 */
	var $overrideLocaleIdentifier;

	/**
	 *
	 * @var char
	 */
	var $extra1;

	/**
	 *
	 * @var char
	 */
	var $extra2;

	/**
	 *
	 * @var char
	 */
	var $extra3;

	/**
	 *
	 * @var char
	 */
	var $extra4;

}

?>
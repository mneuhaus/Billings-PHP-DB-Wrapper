<?php

class PaymentInvoiceEntry extends Base{

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
	 * @var longlong
	 */
	var $_rowid;

	/**
	 *
	 * @var int
	 */
	var $invoiceID;

	/**
	 *
	 * @var datetime
	 */
	var $modifyDate;

	/**
	 *
	 * @var int
	 */
	var $paymentID;

}

?>
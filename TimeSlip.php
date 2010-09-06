<?php

class TimeSlip extends Base{

	/**
	 *
	 * @var int
	 */
	var $activeForTiming = 1;

	/**
	 *
	 * @var int
	 */
	var $categoryID;

	/**
	 *
	 * @var int
	 */
	var $userID;

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
	 * @var double
	 */
	var $distance;

	/**
	 *
	 * @var datetime
	 */
	var $dueDate;

	/**
	 *
	 * @var double
	 */
	var $duration;

	/**
	 *
	 * @var datetime
	 */
	var $endDateTime;

	/**
	 *
	 * @var char
	 */
	var $foreignAppEntityName;

	/**
	 *
	 * @var char
	 */
	var $foreignAppImportID;

	/**
	 *
	 * @var datetime
	 */
	var $foreignAppLastTouchDate;

	/**
	 *
	 * @var char
	 */
	var $foreignAppName;

	/**
	 *
	 * @var char
	 */
	var $foreignAppUser;

	/**
	 *
	 * @var char
	 */
	var $iCalUID;

	/**
	 *
	 * @var int
	 */
	var $invoiceID;

	/**
	 *
	 * @var datetime
	 */
	var $invoicedDate;

	/**
	 *
	 * @var double
	 */
	var $markup;

	/**
	 *
	 * @var int
	 */
	var $mileageType = 1;

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
	var $nature = 101;

	/**
	 *
	 * @var int
	 */
	var $projectID;

	/**
	 *
	 * @var double
	 */
	var $rate = 43;

	/**
	 *
	 * @var int
	 */
	var $roundTime = 5;

	/**
	 *
	 * @var datetime
	 */
	var $startDateTime;

	/**
	 *
	 * @var double
	 */
	var $tax1 = 100;

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
	 * @var longlong
	 */
	var $_rowid;

	/**
	 *
	 * @var int
	 */
	var $timeSlipRefID;

	/**
	 *
	 * @var double
	 */
	var $total;

	/**
	 *
	 * @var int
	 */
	var $typeID = 100;

	/**
	 *
	 * @var double
	 */
	var $units;

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
	 * @var char
	 */
	var $uuid;

	/**
	 *
	 * @var int
	 */
	var $invoicedProjectID;

	/**
	 *
	 * @var double
	 */
	var $totalCached;

	/**
	 *
	 * @var long
	 */
	var $durationCached;

	/**
	 *
	 * @var char
	 */
	var $geoLocationStart;

	/**
	 *
	 * @var char
	 */
	var $geoLocationEnd;
	
}

?>
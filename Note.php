<?php

class Note extends Base{

	/**
	 *
	 * @var object
	 */
	var $contents;

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
	 * @var longlong
	 */
	var $_rowid;

	/**
	 *
	 * @var char
	 */
	var $plainContents;

	/**
	 *
	 * @var int
	 */
	var $projectID;

}

?>
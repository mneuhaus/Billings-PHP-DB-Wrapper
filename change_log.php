<?php

class change_log extends Base{

	/**
	 *
	 * @var INTEGER
	 */
	var $_rowid;

	/**
	 *
	 * @var datetime
	 */
	var $_timestamp;

	/**
	 *
	 * @var longlong
	 */
	var $table_id;

	/**
	 *
	 * @var longlong
	 */
	var $primary_key;

	/**
	 *
	 * @var char
	 */
	var $operation;

	/**
	 *
	 * @var char
	 */
	var $changed_columns;

	/**
	 *
	 * @var char
	 */
	var $client_id;

	/**
	 *
	 * @var longlong
	 */
	var $user_id;

}

?>
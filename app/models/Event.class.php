<?php

class Event extends DB\SQL\Mapper {
	function __construct() {
        parent::__construct(DBManager::getDB(), 'event');
	}

	static function findById($id) {
		$e = new Event();
		$e->load(array('id=?',$id));
		return $e;
	}
}

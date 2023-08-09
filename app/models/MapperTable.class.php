<?php

class MapperTable extends DB\SQL\Mapper {

	function __construct() {
		$table_name = strtolower(get_called_class());
        parent::__construct(DBManager::getDB(), $table_name);
	}

	function values() {
		$v = [];
		foreach($this->fields() as $f) {
			$v[] = $this->get($f);
		}
		return $v;
	}

	function set($key, $v) {
		$methodkey = 'set'.str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
		if (method_exists($this, $methodkey)) {
			$v = $this->$methodkey($v);
		}
		return parent::set($key, $v);
	}

	static function findById($id) {
		$class = get_called_class();
		$e = new $class();
		$e->load(array('id=?',$id));
		return $e;
	}

}

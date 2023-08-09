<?php

require_once('MapperTable.class.php');

class Event extends MapperTable {

	function save() {
		if (!$this->authorization_key) {
			$this->authorization_key = sha1(implode(',',$this->values()).rand());
		}
		return parent::save();
	}

	function setAdresse($a) {
		$this->lat = 48.8534100;
		$this->lng = 2.3488000;
		return $a;
	}

	function copyFrom($arg, $func = null) {
		if ($this->authorization_key && $arg == 'POST' && (!isset($_POST['authorization_key'])  || ($_POST['authorization_key'] != $this->authorization_key)) ) {
			throw new Exception('Not authorized to edit this object');
		}
		return parent::copyFrom($arg, 'Event::filterCopyFrom');
	}

	static function filterCopyFrom($fields) {
		return array_intersect_key(
			$fields,
			array(
				   "nom" => 1, "description" => 1, "date" => 1, "heure_debut" => 1, "heure_fin" => 1, "adresse" => 1,
				   "lat" => 1, "lng" => 1, "url_web" => 1, "url_inscription" => 1, "email" => 1, "image" => 1
			     )
		);
	}

	static function createTable() {
		DBManager::getDB()->exec("
			CREATE TABLE event
			(
				id INTEGER PRIMARY KEY AUTOINCREMENT,
				nom VARCHAR(255),
				description TEXT,
				date VARCHAR(10),
				heure_debut VARCHAR(5),
				heure_fin VARCHAR(5),
				adresse VARCCHAR(255),
				lat FLOAT,
				lng FLOAT,
				url_web VARCHAR(255),
				url_inscription VARCHAR(255),
				email VARCHAR(255),
				confirmation BOOLEAN,
				authorization_key VARCHAR(100),
				image BLOB
			)
		");
	}
	static function insertExample() {
		$event = new Event();
		$event->nom='RCP5';
		$event->description = "A la mairie du 5ème";
		$event->date = "2023-08-12";
		$event->heure_debut = "09:30";
		$event->heure_fin = "12:30";
		$event->adresse = "place du panthéon 75005 Paris";
		$event->lat = 48.7;
		$event->lng = 2.3;
		$event->url_web = "https://rcp5.ouvaton.org/";
		$event->url_inscription = null;
		$event->email = "rcp5@ouvaton.org";
		$event->confirmation = 1;
		$event->save();
	}
}

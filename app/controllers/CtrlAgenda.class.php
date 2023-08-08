<?php

class CtrlAgenda {
    function home(Base $f3) {
        $f3->set('template', 'home.html.php');
        echo View::instance()->render('layout.html.php');
    }

    function setup(Base $f3) {
        $f3->get('DB')->exec("
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
                image BLOB
            )
        ");
        $event = new Event($f3->get('DB'));
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

    function createEvent(Base $f3) {
        if ($f3->exists('POST.date')) {
            if ($f3->exists('POST.id')) {
                $event = Event::findById($f3->get('POST.id'));
            } else {
                $event = new Event($f3->get('DB'));
            }
            $event->copyFrom('POST');
            $event->save();

            $f3->set('SESSION.event_id', $event->id);
            return $f3->reroute('/created', false);
        }
        $f3->set('event', new Event());
        $f3->set('template', 'event_form.html.php');
        echo View::instance()->render('layout.html.php');
    }

    function eventCreated(Base $f3) {
        $id = $f3->get('SESSION.event_id');
        $f3->set('event', Event::findById($id));
        $f3->set('template', 'event_created.html.php');
        echo View::instance()->render('layout.html.php');
    }

    function edit(Base $f3) {
        $id = $f3->get('PARAMS.id');
        $f3->set('event', Event::findById($id));
        $f3->set('template', 'event_form.html.php');
        echo View::instance()->render('layout.html.php');
    }
}

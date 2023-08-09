<?php

class CtrlAgenda {
    function home(Base $f3) {
        $f3->set('template', 'home.html.php');
        echo View::instance()->render('layout.html.php');
    }

    function setup(Base $f3) {
        Event::createTable();
        Event::insertExample();
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

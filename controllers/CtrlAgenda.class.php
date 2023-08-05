<?php

class CtrlAgenda {
    function home(Base $f3) {
        $f3->set('template', 'home.html.php');
        echo View::instance()->render('layout.html.php');
    }
}

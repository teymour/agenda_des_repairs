<?php
require_once('controllers/CtrlAgenda.class.php');

$f3->route('GET /', 'CtrlAgenda->home');
$f3->route('GET /setup', 'CtrlAgenda->setup');

$f3->route('GET /create', 'CtrlAgenda->createEvent');
$f3->route('POST /write', 'CtrlAgenda->createEvent');
$f3->route('GET /created', 'CtrlAgenda->eventCreated');
$f3->route('GET /edit/@id', 'CtrlAgenda->edit');

<?php
require_once('controllers/CtrlAgenda.class.php');

$f3->route('GET /', 'CtrlAgenda->home');
$f3->route('GET /setup', 'CtrlAgenda->setup');

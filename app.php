<?php

$f3 = require(__DIR__.'/vendor/fatfree/lib/base.php');


if(getenv("DEBUG")) {
    $f3->set('DEBUG', getenv("DEBUG"));
}
$f3->set('ROOT', __DIR__);
$f3->set('UI', $f3->get('ROOT')."/views/");

$port = $f3->get('PORT');
$f3->set('urlbase', $f3->get('SCHEME').'://'.$_SERVER['SERVER_NAME'].(!in_array($port,[80,443])?(':'.$port):'').$f3->get('BASE'));

require_once('config/config.php');
require_once('controllers/CtrlAgenda.class.php');

$f3->set('config', $config);
$f3->route('GET /', 'CtrlAgenda->home');

return $f3;

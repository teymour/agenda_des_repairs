<?php

$f3 = require(__DIR__.'/vendor/fatfree/lib/base.php');


if(getenv("DEBUG")) {
    $f3->set('DEBUG', getenv("DEBUG"));
}
$f3->set('ROOT', __DIR__);
$f3->set('UI', $f3->get('ROOT')."/app/views/");

$port = $f3->get('PORT');
$f3->set('urlbase', $f3->get('SCHEME').'://'.$_SERVER['SERVER_NAME'].(!in_array($port,[80,443])?(':'.$port):'').$f3->get('BASE'));

require_once('config/config.php');
$f3->set('config', $config);


$db = new DB\SQL('sqlite:'.$f3->get('ROOT').'/agenda.sqlite');
$f3->set('DB', $db);
$event=new DB\SQL\Mapper($db,'event');

include('app/routes.php');

return $f3;

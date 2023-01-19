<?php
use core\DB;
include('config/database.php');

spl_autoload_register(function($className){
    $path = $className.'.php';
    if(is_file($path))
    require($path);
});



$core = core\Core::getInstance();
$core->Initialize();
$core->Run();
$core->Done();

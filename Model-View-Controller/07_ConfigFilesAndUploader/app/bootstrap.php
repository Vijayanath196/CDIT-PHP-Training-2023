<?php

// include('libraries/Controller.php');
// include('libraries/Core.php');
// include('libraries/Database.php');

include('config/Config.php');

spl_autoload_register(function($className){
    require_once 'libraries/'.$className.'.php';
});


echo APPROOT;

?>
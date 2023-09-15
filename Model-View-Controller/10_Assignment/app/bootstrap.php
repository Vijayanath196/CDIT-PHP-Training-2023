<?php
require_once 'config/config.php';
// require_once 'libraries/controller.php';
// require_once 'libraries/database.php';
// echo dirname(dirname(__FILE__));

spl_autoload_register(function($className){

    require_once 'libraries/'.$className.'.php';
});
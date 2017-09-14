<?php

define('ENV', 'development'); 
switch (strtolower(ENV)){
    case 'development' :
        echo '<pre>';
        error_reporting(E_ALL);
        ini_set('display_errors',1);
        break;      
    case 'staging' :        
        error_reporting(E_ERROR);
        ini_set('display_errors',1);
        break;
    case 'production' :        
        error_reporting(E_ERROR);
        ini_set('display_errors',0);
        break;  
    default :        
        error_reporting(E_ALL);
        ini_set('display_errors',0);
        break;
}


define('DOCUMENT_ROOT', '/var/www/ankit/');

include_once "classes/ArrayHandler.php";
include_once 'classes/RequestHandler.php';
include_once 'classes/PdoWrapper.php';
//include_once 'classes/session_functions.php';


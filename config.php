<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://localhost/mvc_pablo");
    $config['dbname'] = 'contaazul';
    $config['host'] =   'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define("BASE_URL", "http://localhost/mvc_pablo");
    $config['dbname'] = 'contaazul';
    $config['host'] =   'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

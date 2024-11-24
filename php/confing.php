<?php
//ternary -> if bloğu karşılığı
$site_url=(isset($_SERVER['HTTP_HOST'])) ? 'http://' . $_SERVER['HTTP_HOST'] : 'https://' . $_SERVER['HTTPSHOST'];
define('APP_URL', 'http://127.0.0.1:8010/');
define('APP_ROOT', dirname(__FILE__));

//print_r($_SERVER['HTTP_HOST']);
//print $_SERVER['REQUEST_METHOD']; //GET,POST,PUT,PATH,DELETE,OPTİSOSNS
//print $_SERVER['REQUEST_URI'];//urlmize gelen bütün istekleri alır
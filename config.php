<?php
require "predis/autoload.php";
Predis\Autoloader::register();

$host = "127.0.0.1";
$port = 6379;

$redis = new Predis\Client(array(
    "scheme" => "tcp",
    "host" => $host,
    "port" => $port,
    // "password" => "xxxxxx"
	));?>
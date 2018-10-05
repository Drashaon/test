<?php

use Symfony\Component\Yaml\Yaml;

require "../vendor/autoload.php";

$db = Yaml::parse(file_get_contents('../config/db.yml'));

$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    'dbname' => $db['name'],
    'user' => $db['login'],
    'password' => $db['password'],
    'host' => $db['host'],
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
?>

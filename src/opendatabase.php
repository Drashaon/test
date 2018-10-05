<?php
  ini_set('display_errors', 0);
  use Symfony\Component\Yaml\Yaml;
  require __DIR__. '../vendor/autoload.php';
  $connectionParams = Yaml::parseFile(__DIR__.'../config/db.yml');
  $config = new \Doctrine\DBAL\Configuration();
  $bdd = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config); ?>

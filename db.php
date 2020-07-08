<?php
$dbhost = "localhost";
$dbuser = "mkch71_auth";
$dbpass = "Hh11%3Yf";
$dbname = "mkch71_auth";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");
  
  //Проврка подключения
if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД:" .$mysqli->connect_error);
}
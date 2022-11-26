<?php

$db_host = "localhost";
$db_name = "mybookstore";
$db_username = "root";
$db_pass = "admin";

$dsn = "mysql:host=$db_host;dbname=$db_name";
$db_connection =  new PDO($dsn, $db_username, $db_pass);
<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'erp';
date_default_timezone_set("Asia/Kolkata");
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?> 
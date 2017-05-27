<?php

/**
* Created by PhpStorm.
* User: alwizen
* Date: 20/05/2017
* Time: 7:41
*/

$host = "localhost"; // host
$user = "root";      // username
$pass = "";         // password
$db   = "htl2";     // name db

// koneksi ke database
$con =  mysql_connect($host,$user,$pass) or die("Koneksi gagal");
mysql_select_db($db) or die("Tidak bisa Me-load Database");
?>

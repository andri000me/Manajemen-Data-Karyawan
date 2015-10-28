<?php
/**
 *  Database configuration suite
 *  Database e single file ngko le nyeluk gari ge include
 */
$host = "localhost";
$user = "root";
$pass = "";
$database = "karyawan";
mysql_connect($host, $user, $pass);
mysql_select_db($database)
or die ("koneksine gagal pakde! : ".mysql_error());
?>
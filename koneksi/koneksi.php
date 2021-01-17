<?php
$server="localhost";
$user="root";
$pass="";
$mydb="smkn10";

mysql_connect($server, $user, $pass) or die ("Sistem Tidak Terhubung");
mysql_select_db($mydb) or die ("Database Tidak Terhubung");

?>
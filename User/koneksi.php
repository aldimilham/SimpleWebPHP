<?php 
$server   = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "uts2"; 
 
// Koneksi dan memilih database di server 
mysql_connect($server,$username,$password) or die("Gagal"); 
mysql_select_db($database) or die("Database tidak ditemukan"); 
?> 
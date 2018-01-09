<?php
  $server ="localhost";
  $username="root";
  $pass="";
  $database ="rumahsakit";
  mysql_connect($server,$username,$password) or die ("koneksi gagal");
  mysql_select_db($database) or die ("Database tidak bisa dibuka");
?>

<?php
$host = "mysql.extrahosting.me";
$user = "u341037328_ekak";
$password = "123456";
$database_name = "u341037328_ekak";
$koneksi = new PDO("mysql:host={$host};dbname={$database_name}", $user, $password);
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
?>
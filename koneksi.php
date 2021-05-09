<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "arkademy";

$db = mysqli_connect($host, $user, $password, $db);

if(!$db){
	die ('Maaf koneksi gagal'.mysqli_connect_error());
}
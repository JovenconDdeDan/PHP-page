<?php

// se crean las variables para la conexión a la base de datos

$server = "localhost";
$username = "root";
$password = "motitas2020";
$database = "login_registro";

// se cera la conexión a la base de datos
// en php el metodo para conectarse a una base de datos es mysqli_connect

$conn = mysqli_connect($server, $username, $password, $database);

// se verifica si la conexión es exitosa

$connect = new PDO("mysql:host=$server;
dbname=$database;", $username, $password)

?>
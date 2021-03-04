<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/
session_start();
$servername = "localhost";
$database = "nba2";
$username = "test";
$password = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql =  "DROP DATABASE `nba2`";
$resultado = $conn->query($sql);
if ($resultado) {
    $_SESSION['resetear_base_de_datos'] = true;
}else{
    $_SESSION['resetear_base_de_datos'] = false;
}

$sql =  "CREATE DATABASE IF NOT EXISTS `nba2`";
$resultado = $conn->query($sql);
if ($resultado) {
    $_SESSION['crear_base_de_datos'] = true;
}else{
    $_SESSION['crear_base_de_datos'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");
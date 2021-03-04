<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-4.php
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();
$_SESSION['errorapellido']="";

if(isset($_POST['apellido'])){
    if($_POST['apellido']==""){
        $_SESSION['errorapellido']= "Apellido es obligatorio";
    }
}
if($_SESSION['errorapellido'] != ""){
        header("Location:sesiones-2-01-3.php");
}else{
    header("Location:sesiones-2-01-5.php");
}

<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-2.php
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();
$_SESSION['errornombre']="";

if(isset($_POST['nombre'])){
    if($_POST['nombre']==""){
        $_SESSION['errornombre']= "Nombre es obligatorio";
    }
}
if($_SESSION['errornombre'] != ""){
        header("Location:sesiones-2-01-1.php");
}else{
    header("Location:sesiones-2-01-3.php");
}
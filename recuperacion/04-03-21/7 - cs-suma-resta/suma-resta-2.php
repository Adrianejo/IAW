<?php
session_start();

if(isset($_POST['accion'])){
    $_SESSION['dado'] = rand(1,6);

    if($_POST['accion'] == "Restar"){
        $_SESSION['total'] = $_SESSION['total'] - $_SESSION['dado'];
    }else{
        $_SESSION['total'] = $_SESSION['total'] + $_SESSION['dado'];
    }
}

?>

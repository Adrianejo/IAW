<?php
session_start();


if (isset($_POST['cambia1'])) {
    $_SESSION['cambia1'] = $_POST['cambia1'];
    echo '<img src="img/c'.$_SESSION['cambia1'].'.svg" alt="10" width="100" height="100">';
}
if (isset($_POST['cambia2'])) {
    $_SESSION['cambia2'] = $_POST['cambia2'];
    echo '<img src="img/c'.$_SESSION['cambia2'].'.svg" alt="10" width="100" height="100">';
}
if (isset($_POST['cambia3'])) {
    $_SESSION['cambia3'] = $_POST['cambia3'];
    echo '<img src="img/c'.$_SESSION['cambia3'].'.svg" alt="10" width="100" height="100">';
}


header('Location: trio-cartas-1.php');
?>

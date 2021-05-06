<?php
session_start();

if (isset($_POST['cambia'])) {
    $_SESSION['cambia'] = $_POST['cambia'];
    echo '<img src="img/c'.$_SESSION['cambia'].'.svg" alt="10" width="100" height="100">';
}

header('Location: trio-cartas-1.php');
?>

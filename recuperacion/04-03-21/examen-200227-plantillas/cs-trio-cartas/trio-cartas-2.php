<?php
session_start();
$carta= rand(1,10);
$_SESSION['carta'] = $carta;

if (!isset($_SESSION['cambia'])) {
    echo "<img src='img/c".$_SESSION['carta'].".svg' >";
}

header('Location: trio-cartas-1.php');
?>

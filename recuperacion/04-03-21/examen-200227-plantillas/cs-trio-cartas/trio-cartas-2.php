<?php
session_start();

if ($_POST['cambia'] = ['1']) {
    $_SESSION['carta1'] = rand(1,10);
}

if ($_POST['cambia'] = ['2']) {
    $_SESSION['carta2'] = rand(1,10);
}
if ($_POST['cambia'] = ['3']) {
    $_SESSION['carta3'] = rand(1,10);
}

header('Location: trio-cartas-1.php');
?>

<?php
$array=array(
    "p",
    "c",
    "d",
    "t",
);
$palo = $array [rand(0,3)];
$cantidad= rand(1,10);
echo    "<img src='img/".$palo.$cantidad.".svg' >";
?>
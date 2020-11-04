<?php

$numbers        = array(1, 2, 3, 5, 10, 20);


$profesores = array(
    'Javier',
    'MariSol',
    'Florindo',
    'Fidel',
    'Roberto'
);
$asignaturas = array(
    'Base de datos',
    'Servicios de red e internet',
    'Sistemas operativos',
    'Implantacion',
    'Segurida y alta disponibilidad',
    "Empresa"
);
echo "<pre>";
echo "<p> Don o Doña<b>".getRandomArray($profesores). "</b> da clase de <b>".getRandomArray($asignaturas)."</b></p>";
function getRandomArray($array){
    return $array[rand ( 0 , count ( $array ) - 1 )];
}

echo "<p>El jugador asignado es ".$players[rand ( 0 , sizeof($players) -1 ) ]."</p>";


$people = [];

$person = [
    'Dino Cajic',
    32,
    '111-11-1111', // Don't store SSN like this
    'dinocajic@gmail.com',
    42.5, // favorite decimal
    true // is awesome
];


$person[6] = "Author";
$person[] = "An Illustrative Introduction to Algorithms";

$person[999] = "https://medium.com/@dinocajic";
$person[] = "donde estoy?";
$person[1] = 33;

$profesores = array(
    'Javier',
    'MariSol',
    'Florindo',
    'Fidel',
    'Roberto'
);
$asignaturas = array(
    'Base de datos',
    'Servicios de red e internet',
    'Sistemas operativos',
    'Implantacion',
    'Segurida y alta disponibilidad',
    "Empresa"
);

foreach ($players as $key => $value) {
    echo "<p>El jugador ".$value." pertenece al ".$teams[$key]."</p>";
}

for ($i= 0; $i<count($players); $i++) {
    echo "<p>El jugador ".$players[$i]." pertenece al ".$teams[$i]."</p>";
}
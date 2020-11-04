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
echo "<p> Don o Doña <b>".getRandomArray($profesores). "</b> da clase de <b>".getRandomArray($asignaturas)."</b></p>";

function getRandomArray($array){
    return $array[rand ( 0 , count ( $array ) - 1 )];
}

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

$asignaturas = array(
    'Base de datos',
    'Servicios de red e internet',
    'Sistemas operativos',
    'Implantacion',
    'Segurida y alta disponibilidad',
    "Empresa"
);
$profesores = array(
    'Javier',
    'MariSol',
    'Florindo',
    'Fidel',
    'Roberto'
);
foreach ($asignaturas as $key => $value) {
    echo "<p>El jugador ".$value." pertenece al "<div class="$profesores"></div>[$key]."</p>";
}

for ($i= 0; $i<count($asignaturas); $i++) {
    echo "<p>El jugador ".$asignaturas[$i]." pertenece al ".$profesores[$i]."</p>";
}
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

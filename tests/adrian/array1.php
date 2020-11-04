<? php
// EJEMPLOS DE ARRAYES
$ números         = matriz ( 1 , 2 , 3 , 5 , 10 , 20 );


$ equipos = matriz (
    'Sevilla FC' ,
    «R. Madrid ' ,
    'Barça' ,
    'En de Madrid' ,
    'Palencia' ,
    'Numancia' ,
    'Cádiz'
);
$ jugadores = matriz (
    'Jugador 1' ,
    'Jugador 2' ,
    'Jugador 3' ,
    'Jugador 4' ,
    'Jugador 5'
);
echo  "<pre>" ;
echo  "<p> El <b>" . getRandomArray ( $ equipos ). "</b> es infinitamente mejor que el <b>" . getRandomArray ( $ equipos ). "</b> y el <b>" . getRandomArray ( $ equipos ). "</b> </p>" ;


function  getRandomArray ( $ matriz ) {
    return  $ matriz [ rand ( 0 , cuenta ( $ matriz ) - 1 )];
}

echo  "<p> El jugador asignado es" . $ jugadores [ rand ( 0 , tamaño de ( $ jugadores ) - 1 )]. "</p>" ;


$ personas = [];

$ persona = [
    'Dino Cajic' ,
    32 ,
    '111-11-1111' , // No almacene el SSN como este
    'dinocajic@gmail.com' ,
    42.5 , // decimal favorito
    cierto  // es asombroso
];


$ persona [ 6 ] = "Autor" ;
$ person [] = "Una introducción ilustrativa a los algoritmos" ;

$ persona [ 999 ] = "https://medium.com/@dinocajic" ;
$ persona [] = "¿dónde estoy?" ;
$ persona [ 1 ] = 33 ;

$ jugadores = matriz (
    'Jugador 1' ,
    'Jugador 2' ,
    'Jugador 3' ,
    'Jugador 4' ,
    'Jugador 5'
);
$ equipos = matriz (
    'Sevilla FC' ,
    «R. Madrid ' ,
    'Barça' ,
    'En de Madrid' ,
    'Palencia' ,
    'Numancia' ,
    'Cádiz'
);

foreach ( $ jugadores  como  $ clave => $ valor ) {
    echo  "<p> El jugador" . $ valor . "pertenece al" . $ equipos [ $ clave ]. "</p>" ;
}

for ( $ i = 0 ; $ i < count ( $ jugadores ); $ i ++) {
    echo  "<p> El jugador" . $ jugadores [ $ i ]. "pertenece al" . $ equipos [ $ i ]. "</p>" ;
}
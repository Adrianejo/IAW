<?php

function openHtmlTag(){
	echo "<html>";
}
function closeHtmlTag(){
    echo "</html>";
}
function openTag($tag, $id, $class = "red"){
    echo "<".$tag." id=".$id." class=".$class.">";
}
function closeTag($tog){
    echo "</".$tog.">";
}
function sayWhatever($whatever){
	echo "<p>".$whatever."</p>";
}

openHtmlTag();
openTag("h1", "id1");
sayWhatever("Este es el titulo");
closeTag("h1");
openTag("p", "id2");
sayWhatever("Hola este es el contenido");
closeTag("p");
closeHtmlTag();
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
	echo "<h1>".$whatever."</h1>";
}

openHtmlTag();
openTag("p", "id1");
sayWhatever("Este es el titulo");
closeTag("p");
openTag("p", "id2");
closeTag("p");
closeHtmlTag();
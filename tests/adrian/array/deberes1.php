<?php

function openHtmlTag(){
	echo "<html>";
}
function closeHtmlTag(){
    echo "</html>";
}
function openhead()¨{
    echo "<head>"
}
function opentitle()¨{
    echo "<title>"
}
function closetitle()¨{
    echo "<title>"
}
function closehead()¨{
    echo "</head>"
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
openhead();
opentitle();
closetitle();
closehead();
openTag("h1", "id1");
sayWhatever("Este es el titulo");
closeTag("h1");
openTag("p", "id2");
sayWhatever("Hola este es el contenido");
closeTag("p");
closeHtmlTag();
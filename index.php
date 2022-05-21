<?php
/*
Plugin Name : Dynamic Word Change
Plugin URI : https://dynamicwordchange.com
Version : 1.0.0
Author : Primrose Ncube
Author URI : none

*/

function wordFilter ($characters){
    
/*create an array with the word that must be replaced*/

$replace = array ("jerky");

$wordstoreplace = array ("biltong");

$characters = str_ireplace($replace ,$wordstoreplace,$characters);

return $characters;
    
}


/*create a sentence with the word that will be replaced ,in this case "jerky"*/

$myWord = "l am feeling jerky today";

$filtered = wordFilter($myWord);

echo $filtered;



?>
<?php

/*
plugin name: hello word 
plugin URI: https://github.com/lharrak-botaina
author: Lharrak Botaina
author URI:  
version: 0.1
*/
add_action('the_content', 'sey_Hello');

function sey_Hello($content){
   return $content ="<h1>hello word!!!!!</h1>";
}
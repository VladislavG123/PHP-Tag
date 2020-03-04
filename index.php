<?php

include_once 'Helpers.php';

$tag = new Tag("a", [
    // "type" => "text"
 ]);
 
 $tag->setAttributes("style", "color: red;");
 
 $tag->setAttributes(["href" => "https://google.com"]);
 
 //$tag->selfClosing();
 
 $tag->prependBody("Hello");
 $tag->appendBody(" world");
 
 echo $tag;
?>

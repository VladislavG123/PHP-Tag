<?php

include_once 'Helpers.php';


$html = Tag::html();

$head = Tag::head()->appendTo($html);

$meta = Tag::meta()->appendTo($head)->setAttributes("charset", "UTF-8");

$title = Tag::title()->appendBody("Document")->appendTo($head);

$body = Tag::body()->appendTo($html);


echo "<!DOCTYPE html>";
echo $html;
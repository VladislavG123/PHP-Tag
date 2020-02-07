<?php

include_once "Models/Attributes.php";
include_once "Models/Tag.php";
include_once "Models/Body.php";

$div = new Tag("div", []);

$link = new Tag("a", []);

$link->setAttributes('href', "https://google.com");
$link->appendBody("Hello World");

$div->setAttributes("style", "background: red;
                              width: 100px;
                              height: 100px;");
$div->appendBody($link);



echo $div;
/*
include_once "Models/Attributes.php";
include_once "Models/Tag.php";
include_once "Models/Body.php";

$body = new Body();
$tag = new Tag('div', []);

$body->appendBody(" world");
$body->prependBody($tag);

$tag->setAttributes('disabled');

echo $body;*/
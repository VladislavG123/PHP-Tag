<?php

class MyStatic
{
    public const NAME = "John";

    public static $name = 'John';

    public function __construct()
    {
        MyStatic::$name = "Bob";
    }

    public static function action()
    {
        echo __METHOD__;
    }
}
<?php

class MyStatic
{
    public static $name = 'John';

    static function printName(){
        echo static::$name;
    }

    public static function action()
    {
        echo __METHOD__;
    }
}
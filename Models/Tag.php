<?php
/** 
* Class Tag
* @method static Tag a(array $attributes = [])
* @method static Tag h1(array $attributes = [])
* @method static Tag h2(array $attributes = [])
* @method static Tag h3(array $attributes = [])
* @method static Tag h4(array $attributes = [])
* @method static Tag b(array $attributes = [])
* @method static Tag li(array $attributes = [])
* @method static Tag ul(array $attributes = [])
* @method static Tag div(array $attributes = [])
* @method static Tag ol(array $attributes = [])
* @method static Tag input(array $attributes = [])
* @method static Tag button(array $attributes = [])
* @method static Tag img(array $attributes = [])
* @method static Tag p(array $attributes = [])
* @method static Tag form(array $attributes = [])
* @method static Tag html(array $attributes = [])
* @method static Tag body(array $attributes = [])
* */
class Tag extends BaseTag 
{

    public static function make($name, $attributes = [])
    {
        return new self($name, $attributes);
    }

    public static function __callStatic($name, $arguments){
        array_unshift($arguments, $name);
        return call_user_func_array([self::class, 'make'], $arguments);
    }
}

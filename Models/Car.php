<?php

class Car
{
    public static function moveForward($car, $objectInForward)
    {
        if (gettype($objectInForward) === "Car") {
            return false;
        }


        return true;
    }

    public static function turnLeft($car, $objectInLeft)
    {
        if (gettype($objectInLeft) === "Car") {
            return false;
        }

        return true;
    }

    public static function turnRight($car, $objectInRight)
    {
        if (gettype($objectInRight) === "Car") {
            return false;
        }

        
        return true;
    }
}

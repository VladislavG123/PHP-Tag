<?php

function printMap($road, $width, $height)
{
    for ($x=0; $x < $width; $x++) { 
        for ($y=0; $y < $height; $y++) { 
            if(gettype($road[$x][$y]) === "object")
                echo "*";
            else 
                echo "#";
        }
        echo "<br />";
    }
}

include_once 'Helpers.php';

$width = 3;
$height = 10;

$road = [];

for ($x=0; $x < $width; $x++) { 
    for ($y=0; $y < $height; $y++) { 
        if (rand(500, 1000) % 20 == 0) {
            $road[$x][$y] = new Car();
        }
    }
}

printMap($road, $width, $height);

while (true) {
    
    for ($x=0; $x < $width; $x++) { 
        for ($y=0; $y < $height; $y++) { 
                
            $rand = rand(1, 3);
            $result = false;
            if ($rand == 1) {
                $result = Car::turnLeft($road[$x][$y], $road[$x - 1][$y]);
            }
            else if ($rand == 2) {
                $result = Car::turnRight($road[$x][$y], $road[$x + 1][$y]);
            }          
            
            if ($rand == 3 || $result === false) {
                $result = Car::moveForward($road[$x][$y], $road[$x][$y - 1]);
            }
            echo $result . "<br />";

            
        }
    }
    
    break;
    sleep(1);
    printMap($road, $width, $height);
}



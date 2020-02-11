<?php

class NewBudget extends Budget 
{
    public static $debt = 0;

    public function addMoney(int $count)
    {
        if (self::$debt >= $count) {
            self::$debt -= $count;
        }
        else{
            $count -= self::$debt;
            self::$debt = 0;


            parent::addMoney($count);
        }
    }

    public function spendMoney(int $count)
    {
        $deg = 0;

        if(parent::$bank + $this->ownMoney < $count &&
           parent::$bank + $this->ownMoney - $count - self::$debt <= -100){
            $deg = parent::$bank + $this->ownMoney - $count * -1;
            
            echo  "<br />". $deg ."<br />";
            self::$debt += $deg;
        }
        parent::spendMoney($count + $deg);

    }
}

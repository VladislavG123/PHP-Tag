<?php

class Budget
{
    public static $bank = 0;

    public $ownMoney = 0;

    public function addMoney(int $count)
    {
        self::$bank += $count;
    }

    public function spendMoney(int $count)
    {
        if($count > self::$bank){
            if($count > self::$bank + $this->ownMoney)
                die("U have not money");

            $this->ownMoney -= $count - self::$bank;
            self::$bank = 0;
        }
        else{
            $this->ownMoney -= $count;
        }

    }

    public function collectMoney(int $count)
    {
        if ($count > self::$bank) 
            die("U have not money");
        
        $this->ownMoney -= $count;
    }

}

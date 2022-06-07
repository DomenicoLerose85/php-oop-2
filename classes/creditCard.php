<?php

class creditCard
{

    protected $cardNum;
    protected $pin;

    public function __construct($_cardNum, $_pin)
    {
        $this->cardNum = $_cardNum;
        $this->pin = $_pin;
    }

    public function setcardNum($_cardNum)
    {
        $this->cardNum = $_cardNum;
    }

    public function getcardNum()
    {
        return $this->cardNum;
    }

    public function setpin($_pin)
    {
        $this->pin = $_pin;
    }

    public function getpin()
    {
        return $this->pin;
    }
}

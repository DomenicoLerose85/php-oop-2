<?php

require_once __DIR__ . '/User.php';
class PremiumUser extends User{

    protected $discount;

    public function setDiscount($_discount){
        $this->discount = $_discount;
    }
    
    public function getDiscount(){
        return $this->discount;
    }



}

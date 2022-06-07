<?php

require_once __DIR__ . '/products.php';

class Accessories extends products
{

    public $type;
    public $price;

    public function setType($_type)
    {
        $this->type = $_type;
    }

    public function setPrice($_price)
    {
        $this->price = $_price;
    }
}

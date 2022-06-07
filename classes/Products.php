<?php

class Products
{

    protected $name;
    protected $type;
    protected $price;

    function __construct($_name, $_type, $_price)
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->price = $_price;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setType($_type)
    {
        $this->type = $_type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setPrice($_price)
    {
        $this->price = $_price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

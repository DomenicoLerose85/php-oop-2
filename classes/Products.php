<?php

require_once __DIR__ . '/Products.php';
class Products extends User
{

    protected $name;
    protected $type;
    protected $price;

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

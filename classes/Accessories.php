<?php

require_once __DIR__ . '/products.php';

class Accessories extends products
{

    public $type;

    public function setType($_type)
    {
        $this->type = $_type;
    }
}

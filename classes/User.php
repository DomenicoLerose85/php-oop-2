<?php
class User
{

    protected $name;
    protected $surName;

    function __construct($_name, $_surName,)
    {
        $this->name = $_name;
        $this->genre = $_surName;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSurnaName($_surName)
    {
        $this->surName = $_surName;
    }

    public function getSurnaName()
    {
        return $this->surName;
    }
}

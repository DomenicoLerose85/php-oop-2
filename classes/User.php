<?php
class User
{

    protected $name;
    protected $SurName;

    function __construct($_name, $_SurName)
    {
        $this->name = $_name;
        $this->genre = $_SurName;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSurnaName($_SurName)
    {
        $this->SurName = $_SurName;
    }

    public function getSurnaName()
    {
        return $this->SurName;
    }
}

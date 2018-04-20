<?php
include_once("Animal.php");

class Shark extends Animal
{
    private $frenzy = false;
    
    public function __construct($S_name)
    {
        parent::__construct($S_name, 0, self::FISH);
        echo "A KILLER IS BORN !\n";
    }
    public function smellBlood($bool)
    {
        $this->frenzy = $bool;
    }
    public function status()
    {
        if ($this->frenzy == true)
            echo $this->name . " is smelling blood and wants to kill.\n";
        else
            echo $this->name . " is swimming peacefully.\n";
    }
}

?>
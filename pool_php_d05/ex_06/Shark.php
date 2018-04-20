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
    public function eat($animal)    
    {
        if ($animal->getType() == "mammal" || ($animal->getType() == "fish" && get_class($animal) != "Shark") || $animal->getType() == "bird")
            {
                echo $this->name . " ate a " . $animal->getType() . " named " . $animal->name . ".\n";
                $this->smellBlood(false);
            }
        else
            echo $this->name . ": It's not worth my time.\n";
    }
    public function smellBlood($bool)
    {
        if (is_bool($bool) == true)
            $this->frenzy = $bool;
        else
            return;
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
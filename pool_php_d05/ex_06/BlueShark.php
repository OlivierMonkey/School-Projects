<?php
include_once("Shark.php");

class BlueShark extends Shark
{
    public function __construct($BS_name)
    {
        parent::__construct($BS_name);
    }
    public function eat($animal)
    {
        if ($animal->getType() == "fish" && get_class($animal) != "Shark")
            {
                echo $this->name . " ate a " . $animal->getType() . " named " . $animal->name . ".\n";
                $this->smellBlood(false);
            }
        else
            echo $this->name . ": It's not worth my time.\n";
    }
}

?>
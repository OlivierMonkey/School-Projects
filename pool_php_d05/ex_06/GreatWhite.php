<?php

include_once("Shark.php");
include_once("Canary.php");

class GreatWhite extends Shark
{
    public function __construct($GS_name)
    {
        parent::__construct($GS_name);
    }
    public function eat($animal)
    {
        if ($animal->getType() == "bird" && get_class($animal) == "Canary")
            {
                echo $this->name . ": Next time you try to give me that to eat. I'll eat you instead.\n";
                $this->smellBlood(false);
            }
        else if ($animal->getType() == "fish" && get_class($animal) == "Shark")
            echo $this->name . ": The best meal one could wish for.\n";
        else
            echo $this->name . ": It's not worth my time.\n";
    }
}

?>
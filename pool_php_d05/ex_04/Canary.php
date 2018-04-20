<?php
include_once("Animal.php");

class Canary extends Animal
{
    private $eggs = 0;

    public function __construct($B_name)
    {
        parent::__construct($B_name, 2, self::BIRD);
        echo "Yellow and smart ? Here I am !\n";
    }
    public function getEggsCount()
    {
        return $this->eggs;
    }
    public function layEgg()
    {
        $this->eggs++;
    }
}
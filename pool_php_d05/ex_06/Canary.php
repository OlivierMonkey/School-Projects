<?php
include_once("Animal.php");

class Canary extends Animal
{
    private $eggs = 0;
    private $count_Eggs = 0;

    public function __construct($B_name)
    {
        parent::__construct($B_name, 2, self::BIRD);
        echo "Yellow and smart ? Here I am !\n";
    }
    public function getEggsCount()
    {
        return $this->count_Eggs;
    }
    public function layEgg()
    {
        $this->count_Eggs++;
    }
}
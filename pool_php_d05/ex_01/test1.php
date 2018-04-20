<?php
include_once("Animal.php");

$isidore = new Animal("Isidore", 4, Animal::MAMMAL);

echo $isidore->getName() . " has " . $isidore->getLegs() . " legs and is a " . $isidore->getType() . ".\n";

?>
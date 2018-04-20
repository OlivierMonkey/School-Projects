<?php
include_once("Animal.php");

$isidore = new Animal("Isidore", 4, Animal::MAMMAL);
$garfield = new Animal("Garfield", 4, Animal::MAMMAL);
$milou = new Animal("Milou", 4, Animal::MAMMAL);
$nemo = new Animal("Nemo", 0, Animal::FISH);
$ariale = new Animal("Ariale", 0, Animal::FISH);
$parrot = new Animal("Parrot", 2, Animal::BIRD);

echo $isidore->getName() . " has " . $isidore->getLegs() . " legs and is a " . $isidore->getType() . ".\n";

Animal::getNumberOfAnimalsAlive();
Animal::getNumberOfMammals();
Animal::getNumberOfFishes();
Animal::getNumberOfBirds();

?>
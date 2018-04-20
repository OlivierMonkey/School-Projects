<?php

include_once("Astronaut.php");

$mutta = new Astronaut("Mutta");
$hibito = new Astronaut("Hibito");

echo $mutta->getId() . "\n";
echo $hibito->getId() . "\n";
<?php

include_once("Phobos.php");
include_once("Mars.php");

$titi = new planet\Mars();
$toto = new planet\Mars();

new planet\moon\Phobos($titi);
new planet\moon\Phobos($toto);

?>
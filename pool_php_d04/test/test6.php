<?php

include_once("Team.php");
include_once("Mars.php");
include_once("Astronaut.php");
include_once("Phobos.php");

$mutta = new Astronaut("Mutta");
$hibito = new Astronaut("Hibito");
$serika = new Astronaut("Serika");
$spaceBro = new Team("SpaceBrothers");

$spaceBro->add($mutta);
$spaceBro->add($hibito);
$spaceBro->add($serika);
$spaceBro->add(3);

echo $spaceBro->countMembers() . "\n";

$titi = new planet\Mars();

$mutta->doActions($titi);
$spaceBro->showMembers();
$spaceBro->remove($hibito);

echo $spaceBro->countMembers() . "\n";

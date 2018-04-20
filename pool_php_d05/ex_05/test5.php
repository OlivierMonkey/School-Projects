<?php
include_once("Shark.php");
include_once("Canary.php");

$titi = new Canary("Titi");
$willy = new Shark("Willy");
$alfred = new Shark("Alfred");

$willy->status();
$willy->smellBlood(true);
$alfred->smellBlood(true);
$willy->status();
$titi->layEgg();

echo $titi->getEggsCount();
echo $willy->eat($titi);
echo $willy->status();
echo $alfred->eat($willy);
echo $alfred->status();

?>
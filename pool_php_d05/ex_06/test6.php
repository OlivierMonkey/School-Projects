<?php
include_once("Shark.php");
include_once("Canary.php");
include_once("BlueShark.php");
include_once("GreatWhite.php");

$titi = new Canary("Titi");
$willy = new Shark("Willy");
$alfred = new Shark("Alfred");
$bigone = new GreatWhite("Bigone");
$deepblue = new BlueShark("Deepblue");

$willy->status();
$willy->smellBlood(true);
$alfred->smellBlood(true);
$willy->status();
$titi->layEgg();

echo $titi->getEggsCount();
echo $willy->eat($titi);
echo $willy->status();
echo $alfred->eat($willy);
echo $bigone->eat($willy);
echo $deepblue->eat($alfred);
echo $bigone->eat($titi);
echo $alfred->status();

?>
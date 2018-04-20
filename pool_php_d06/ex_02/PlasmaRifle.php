<?php

include_once("AWeapon.php");

class PlasmaRifle extends AWeapon
{
    public function __construct($P_name)
    {
        parent::__construct($P_name, 21, 5);
    }

    public function attack()
    {
        echo "PIOU\n";
    }
}

?>
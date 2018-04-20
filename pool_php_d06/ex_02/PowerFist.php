<?php

include_once("AWeapon.php");

class PowerFist extends AWeapon
{
    public function __construct($F_name, $F_apcost, $F_damage)
    {
        parent::construct("Power Fist", 50, 8);
        $this->melee = true;
    }

    public function attack()
    {
        echo "SBAM\n";
    }
}
?>
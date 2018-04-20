<?php

class TacticalMarine extends AspaceMarine
{    
    public function __construct($T_name)
    {
        parent::__construct($T_name, 100, 20);
        $this->name = $T_name;
        $this->equip(new PlasmaRifle);
        echo $this->name . " on duty.\n";
    }
    public function __destruct()
    {
        echo $this->name . " the Tactical Marine has fallen !\n";
    }
    public function recoverAP($M_reco)
    {
        if ($this->hp <= 0)
            return false;
        $this->ap += 12;
        if ($this->ap >= 50)
            $this->ap = 50;
    }
}
?>
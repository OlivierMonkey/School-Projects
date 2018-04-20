<?php

include_once("AWeapon.php");

abstract class AMonster implements IUnit
{
    protected $name;
    protected $hp;
    protected $ap;
    protected $damage;
    protected $apcost;
    protected $myTarget;

    public function __construct($M_name, $M_hp, $M_ap)
    {
        $this->name = $M_name;
        $this->hp = 0;
        $this->ap = 0;
        $this->damage = 0;
        $this->apcost = 0;
        $this->myTarget = null;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getHp()
    {
        return $this->hp;
    }
    public function getAp()
    {
        return $this->ap;
    }
    public function getDamage()
    {
        return $this->damage;
    }
    public function equip($M_weapon)
    {
        if ($this->hp <= 0)
            return false;
        echo "Monsters are proud and fight with their own bodies.\n";
    }
    public function attack($M_attack)
    {
        if ($this->hp <= 0)
            return false;
        if (($M_attack instanceof IUnit) == false)
            throw new Exception("Error in AMonster. Parameter is not an IUnit.");
        if ($this->myTarget != $M_attack)
            echo $this->name . ": I'm too far away from " . $this->myTarget . ".\n";
        if (($this->myTarget == $M_attack) && ($this->ap >= $this->apcost))
            {
                $this->ap -= $this->apcost;
                echo $this->name . ": attacks " . $this->myTarget . ".\n";
                $this->receiveDamage($this->damage);
            }
    }
    public function moveCloseTo($M_target)
    {
        if ($this->hp <= 0)
            return false;
        if (($M_target instanceof IUnit) == false)
            throw new Exception("Error in AMonster. Parameter is not an IUnit.");
        if ($this->myTarget != $M_target)
            echo $this->name . " is moving close to " . $M_target . ".\n";
        $this->myTarget = $M_target;
    }
    public function receiveDamage($M_damage)
    {
        if ($this->hp <= 0)
            return false;
        $this->hp -= $M_damage;
        return $this->hp;
    }
    public function recoverAP($M_reco)
    {
        if ($this->hp <= 0)
            return false;
        $this->ap += 7;
        if ($this->ap >= 50)
            $this->ap = 50;
    }
}
?>
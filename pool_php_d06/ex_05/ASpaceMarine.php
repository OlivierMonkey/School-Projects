<?php

include_once("AWeapon.php");

abstract class ASpaceMarine implements IUnit
{
    protected $name;
    protected $hp;
    protected $ap;
    protected $damage;
    protected $apcost;
    protected $myTarget;
    protected $weapon;
    protected $equiped;

    public function __construct($M_name, $M_hp, $M_ap)
    {
        $this->name = $M_name;
        $this->hp = 0;
        $this->ap = 0;
        $this->damage = 0;
        $this->apcost = 0;
        $this->myTarget = null;
        $this->weapon = null;
        $this->equiped = false;
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
    public function getWeapon()
    {
        return $this->weapon;
    }
    public function equip($M_weapon)
    {
        if ($this->hp <= 0)
            return false;
        if (($M_weapon instanceof AWeapon) == false)
            throw new Exception("Error in ASpaceMarine. Parameter is not an AWeapon.");
        if (($this->weapon != $M_weapon) && ($this->equiped = false))
            {
                $this->weapon = $M_weapon;
                $this->equiped = true;
                echo $this->name . " has been equiped with a " . $this->weapon->name . ".\n";            
            }
    }
    public function attack($M_attack)
    {
        if ($this->hp <= 0)
            return false;
        if (($M_attack instanceof IUnit) == false)
            throw new Exception("Error in ASpaceMarine. Parameter is not an IUnit.");
        if ($this->equiped == false)
            {
                echo $this->name . ": Hey, this is crazy. I'm not going to fight this empty handed.\n";
                return;
            }
        if (($this->weapon->melee == true) && ($myTarget != $M_attack))
            echo $this->name . ": I'm too far away from " . $M_attack . ".\n";
        if ($this->ap >= $this->weapon->apcost)
            {
                $this->weapon->attack();
                $this->ap -= $this->weapon->apcost;
                echo $this->name . " attacks " . $myTarget . " with a " . $this->weapon->name . ".\n";
                $this->weapon->receiveDamage($this->weapon->damage);
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
        $this->ap += 9;
        if ($this->ap >= 50)
            $this->ap = 50;
    }
}
?>
<?php

namespace App;

use App\Interfaces\Weapons as InterfacesWeapons;

abstract class Weapons 
{

    public function teste()
    {
        $criar = $this->createWeapon();
        $criar->arma();
    }

    abstract public function createWeapon() : InterfacesWeapons;
}










?>
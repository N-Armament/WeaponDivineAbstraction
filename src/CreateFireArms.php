<?php

namespace App;

class CreateFireArms extends Weapons
{
    
	/**
	 * @return Interfaces\Weapons
	 */
	public function createWeapon(): Interfaces\Weapons {
        return new FireArms;
	}

    public function nome(){
        
    }
}















?>
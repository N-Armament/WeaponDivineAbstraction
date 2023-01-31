<?php

namespace App;


class CreateWhiteGuns extends Weapons
{
    
	/**
	 * @return Interfaces\Weapons
	 */
	public function createWeapon(): Interfaces\Weapons {
        return new WhiteGuns;
	}
    
}












?>
<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 9.1.2018.
 * Time: 9:52
 */

namespace Game\Units;

use Game\Interfaces\PersonInterface;
use Game\Interfaces\SoldierInterface;
use Game\Traits\PersonTrait;

class Soldier implements PersonInterface, SoldierInterface
{
    use PersonTrait;

    public function attackPerson(PersonInterface $person)
    {
        $person->removeHealth(50);
    }
}
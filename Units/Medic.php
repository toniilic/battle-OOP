<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 9.1.2018.
 * Time: 11:09
 */

namespace Game\Units;

use Game\Interfaces\PersonInterface;
use Game\Interfaces\MedicInterface;
use Game\Interfaces\SoldierInterface;
use Game\Traits\PersonTrait;

class Medic implements PersonInterface, MedicInterface, SoldierInterface
{
    use PersonTrait;

    /**
     * @param PersonInterface $
     * @return mixed
     */
    function heal(PersonInterface $person)
    {
        $person->addHealth(25);

        return true;
    }


    public function attackPerson(PersonInterface $person)
    {
        $person->removeHealth(25);
    }
}
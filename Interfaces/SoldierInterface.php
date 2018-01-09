<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 9.1.2018.
 * Time: 11:42
 */

namespace Game\Interfaces;


interface SoldierInterface
{
    public function attackPerson(PersonInterface $person);
}
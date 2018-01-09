<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 9.1.2018.
 * Time: 11:24
 */

namespace Game\Interfaces;


interface MedicInterface
{
    /**
     * @param PersonInterface $
     * @return mixed
     */
    function heal(PersonInterface $person);
}
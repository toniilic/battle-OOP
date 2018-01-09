<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 9.1.2018.
 * Time: 11:23
 */

namespace Game\Interfaces;


interface PersonInterface
{
    public function getHealth();

    public function addHealth($health_points);

    public function removeHealth($health_points);
}
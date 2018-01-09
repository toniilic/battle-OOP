<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 9.1.2018.
 * Time: 11:37
 */

namespace Game\Traits;

trait PersonTrait
{
    protected $health = 100;

    protected $died = false;

    public function getHealth()
    {
        if(!$this->checkIfAlive()) {
            return false;
        }

        return $this->health;
    }

    public function addHealth($health_points)
    {
        if(!$this->checkIfAlive()) {
            return false;
        }

        $this->health = $this->health + $health_points;

        if($this->health >= 100) {
            $this->health = 100;
        }
        return true;
    }

    public function removeHealth($health_points)
    {
        if(!$this->checkIfAlive()) {
            return false;
        }

        $this->health = $this->health - $health_points;

        if ($this->health <= 0) {
            $this->died = true;
        }
        return true;
    }

    protected function checkIfAlive()
    {
        if($this->died = false) {
            return true;
        }
        return false;
    }
}
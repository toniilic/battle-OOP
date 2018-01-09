<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 9.1.2018.
 * Time: 11:49
 */

namespace Game\Exceptions;

class PersonDeadException extends \Exception
{
    protected $message = 'Person has died';
}
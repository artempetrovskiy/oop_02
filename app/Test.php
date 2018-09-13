<?php

namespace App;

require_once 'C:\xampp\htdocs\oop_02\app\Exceptions\ComputerException.php';

use App\Exceptions\ComputerException;

class Test
{
    /**
     *
     */
    public function testing()
    {
        try {
            throw new ComputerException();
        } catch (ComputerException $e){
            echo get_class($e);
        }
    }
}
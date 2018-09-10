<?php

class Asus extends Computer implements IComputer
{
    public function __construct()
    {
        $this
            ->setComputerName('Asus X540')
            ->setCpu('Intel Core')
            ->setRam('8 Gb');
    }

    protected function idenifyComputer()
    {

    }
}



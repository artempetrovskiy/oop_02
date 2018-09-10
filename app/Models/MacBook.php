<?php

class MacBook extends Computer implements IComputer
{
    public function __construct()
    {
        $this
            ->setComputerName('Apple MacBook Pro')
            ->setCpu('Intel Core i7')
            ->setRam('16 Gb');
    }

    public function idenifyComputer()
    {
        Console::printLine(hash('md5', $this->printParamsByGetters()));
    }
}

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

    public function start()
    {
        try {
            if (1){
                throw new Exception('Arrrrhhhh');
            }
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }

    public function stop()
    {
        // TODO: Implement stop() method.
    }

    public function restart()
    {
        // TODO: Implement restart() method.
    }
}



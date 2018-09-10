<?php

abstract class Computer
{

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $cpu
     */
    private $cpu;

    /**
     * @var string $ram
     */
    private $ram;

    /**
     * @var boolean $isEnabled
     */
    private $isEnabled;




//    /**
//     * Getters
//     */
//    abstract public function getComputerName();
//    abstract public function getCpu();
//    abstract public function getRam();

//    /**
//     * Setters
//     */
//    abstract protected function setComputerName($name);
//    abstract protected function setCpu($cpu);
//    abstract protected function setRam($ram);


    /**
     * @return string
     */
    public function getComputerName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * @return string
     */
    public function getRam()
    {
        return $this->ram;
    }


    /**
     *
     */
    public function printParams()
    {
        print_r("Name: $this->name" . PHP_EOL . "CPU: $this->cpu" . PHP_EOL . "RAM: $this->ram");

    }

    /**
     *
     */
    public function printParamsByGetters()
    {
        print_r("  Name: {$this->getComputerName()}" . PHP_EOL
                        . "  CPU: {$this->getCpu()}" . PHP_EOL
                        . "  RAM: {$this->getRam()}" . PHP_EOL);

    }

    public function printParamsByColours()
    {
        Console::printLine('--------');
        Console::printLine($this->getComputerName(), '');
        Console::printLine($this->getCpu());
        Console::printLine($this->getRam());
    }

    /**
     * @param string $name
     * @return Computer
     */
    protected function setComputerName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $cpu
     * @return Computer
     */
    protected function setCpu($cpu)
    {
        $this->cpu = $cpu;
        return $this;
    }

    /**
     * @param string $ram
     * @return Computer
     */
    protected function setRam($ram)
    {
        $this->ram = $ram;
        return $this;
    }

    abstract protected function idenifyComputer();
}
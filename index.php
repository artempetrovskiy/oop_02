<?php

require_once 'C:\xampp\htdocs\oop_02\app\Test.php';

use App\Test;

require_once __DIR__ . '/bootstrap/autoload.php';
//spl_autoload_register(Autoload::loader);

require_once __DIR__ . '/app/Kernel/Console.php';
require_once __DIR__ . '/app/Interfaces/IComputer.php';
require_once __DIR__ . '/app/Models/Computer.php';
require_once __DIR__ . '/app/Models/Asus.php';
require_once __DIR__ . '/app/Models/MacBook.php';

$asus = new Asus();
$macBook = new MacBook();


//var_dump($asus->printParamsByGetters());


var_dump($macBook->idenifyComputer());


$test = new Test();

$test->testing();

$asus->start();


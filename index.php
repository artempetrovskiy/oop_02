<?php


require_once __DIR__ . '/bootstrap/autoload.php';
spl_autoload_register(Autoload::loader);

//require_once __DIR__ . '/app/Kernel/Console.php';
//require_once __DIR__ . '/app/Interfaces/IComputer.php';
//require_once __DIR__ . '/app/Models/Computer.php';
//require_once __DIR__ . '/app/Models/Asus.php';
//require_once __DIR__ . '/app/Models/MacBook.php';

$asus = new Asus();
$macBook = new MacBook();


//var_dump($asus->printParamsByGetters());


var_dump($macBook->idenifyComputer());


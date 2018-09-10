<?php

class Autoload
{
    static function loader($className){
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
        if (file_exists($fileName)){
            include(__DIR__ . '/../app/' . $fileName);
            if (class_exists($className)){
                return true;
            }
        }
    }
}
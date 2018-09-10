<?php

class Console
{
    public static $warning = 'WARNING';

    public static $success = 'SUCCESS';

    public static $failure = 'FAILURE';

    public static function printLine($message, $status = '')
    {
        switch ($status){
            case self::$success:
                $color = "{0;32m";
                break;
            case self::$warning:
                $color = "{0;31m";
                break;
            case self::$failure:
                $color = "{0;33m";
                break;
            default:
                $color = "{1;37m";

        }

        echo $message;
        echo $color;



    }
}
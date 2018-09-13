<?php

function inverse($i)
{
    if (!$i){
        throw new \Exception('Делить на ноль нельзя');
    }
    return 1/$i;
}

try {
    inverse(5);
} catch (Exception $e){
    echo $e->getMessage(), PHP_EOL;
    //die($e->getMessage());
} finally {
    echo 'Finally code 1', PHP_EOL;
}

try {
    inverse(0);
} catch (Exception $e){
    echo $e->getMessage(), PHP_EOL;
    //die($e->getMessage());
} finally {
    echo 'Finally code 2', PHP_EOL;
}

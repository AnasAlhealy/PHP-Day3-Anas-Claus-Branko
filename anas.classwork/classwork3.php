<?php
$array = [rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(),];



function TheHighestValue($array1)
{
    $result = max($array1);
    echo "The biggest  in the array is $result.";
};

TheHighestValue($array);

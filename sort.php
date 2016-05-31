<?php

$array = array(1000, 3, 7, 2, 8, 1, 9, 0, 100, 200, 800, 15000);
var_dump(mySort($array));
echo "<br>";
echo "<br>";

var_dump(newArray($array));

/**
 * @param array $array
 * @return array
 */
function mySort(array $array)
{
    $result = array();
    while (count($array) > 0) {
        $max = myMax($array);
        $array = myDel($array, $max);
        $result[] = $max;
    }

    return $result;
}

/**
 * @param integer[] $array
 * @return integer
 */
function myMax(array $array)
{
    $max = 0;
    foreach ($array as $element) {
        if ($element > $max) {
            $max = $element;
        }
    }

    return $max;
}

/**
 * @param integer[] $array
 * @param integer $element
 * @return integer[]
 */
function myDel(array $array, $element)
{
    foreach ($array as $key => $value) {
        if ($element == $value) {
            unset($array[$key]);
        }
    }
    return $array;
}

/**
 * @param array $array
 * @return array
 */
function newArray(array $array)
{
    $i = 1;
    $result = array();
    while (count($array) - $i >= 0) {
        $key = count($array) - $i;
        $result[] = $array[$key];
        $i = $i + 1;
    }
    return $result;
}
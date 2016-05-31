<?php

$array = array(100, 2, 3, 1);
$sortedArray = mySort($array);
var_dump($sortedArray);
echo "<br>";
echo "<br>";
var_dump(newArray($sortedArray));
echo "<br>";
echo "<br>";
var_dump(shorter($sortedArray));
echo "<br>";
echo "<br>";
print_r(ranArray());



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
    $i = count($array) - 1;
    $result = array();

    while ($i >= 0) {
        $result[] = $array[$i];
        $i--;
    }
    return $result;
}

/**
 * @param array $array
 * @return int
 */
function averArray(array $array)
{
    $i = count($array) - 1;
    $sum = 0;
    while ($i >= 0) {
        $sum = $array[$i] + $sum;
        $i--;
    }

    return $sum / count($array);
}

/**
 * @param array $array
 * @return int
 */
function shorter(array $array)
{
    $sum = 0;
    foreach ($array as $element) {
        $sum += $element;//  $sum=$sum+$element;
    }
    $random=rand(1,100); // funkciya vertae vipadkove chislo
    return round($sum / count($array)); //function round - okruglyae
}

/**
 * @return array
 */
function ranArray ()
{
    $result = array();
    $i=0;
    while ($i<100)
    {
        $result[] = rand(1,100);
        $i++;
    }
    return $result;
}
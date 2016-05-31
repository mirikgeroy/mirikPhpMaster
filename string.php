<?php
/**
 * Created by PhpStorm.
 * User: Mirik Geroy
 * Date: 31.05.2016
 * Time: 16:10
 */
$str1="https://www.google.com.ua/?ion=1&espv=2#q=ss+236";
$str = "https://www.google.com.ua/?ion=1&espv=2#q=mirik%20geroy%20super%20programmer";
print_r(strMy($str));
echo "<br>";
echo strMy1($str1);

function strMy($str)
{
    $result1 = explode("q=", $str);
    $result2 = explode("%20", $result1[1]);
    $result = implode(" ", $result2);
    return $result;
}

function strMy1($str)
{
    $result1 = explode("q=", $str);
    $result = implode(" ", explode("+", $result1[1]));
    return $result;
}
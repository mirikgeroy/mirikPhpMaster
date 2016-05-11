<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 11.05.2016
 * Time: 9:44
 */
$a=0;
while ($a<=10)
{
    echo "$a<br>";
    $a=$a+1;
}

$sum=0;
$i=1;
do
{
    $sum=$sum+$i;
    $i++;
}
while ($i<=100);
echo "сума всіх чисел від 1 до 100 рівна - $sum";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>масиви</title>
</head>

<body>
<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 11.05.2016
 * Time: 16:45
 */
function sqvare($a)
{
    $result = $a * $a;
    return $result;
}

$new = 80;
echo "квадрат $new = ";
$h = sqvare($new);
echo $h;

function link($link, $title)
{
    echo "<a href='$link'>$title</a>";
}

echo "<br>";
link('facebook.com', 'мережа');

$name[] = "alex";
$name[] = "napolion";
$name[] = "georj";

$w=" ноутбук ";

$w=trim($w);
echo "<br>$w";

$box=array("персик","огірок");
list($fruit,$veget)=$box;
echo "<br>$fruit<br>$veget";

    exit("<p>робота проги завершена на 39 строчці");
echo "<br>в масиві знайдено " . count($name) . " елемента";


?>

</body>
</html>
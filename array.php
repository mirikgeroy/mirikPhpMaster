<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>масиви</title>
</head>

<body>
<?php
/*
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 11.05.2016
 * Time: 11:39
*/
/*перший спосіб задачі масиву*/
/*
$name [0] = "sasa";
$name [1] = "masa";
$name [2] = "vania";
$name [3] = "ania";
$name [4] = "kostia";

echo $name[3];
*/
/*другий спосіб задачі масиву*/
$name = array(0 => "sasa", 1 => "masa", 2 => "vania", 3 => "ania", 4 => "kostia");

echo $name[1];

$capital ["russia"] = "moskov";
$capital ["usa"] = "2";
$capital ["france"] = "3";
$capital ["Ukraine"] = "4";
$capital ["italy"] = "5";

echo "<br>";

echo $capital["italy"];

$naselenna = array("rus" => "150", "usa" => "250", "fran" => "40", "ukr" => "52", "ital" => "35");

echo "<br>";

echo "столица України -" . $capital["Ukraine"] . ". населення України - " . $naselenna["ukr"] . " млн людей";

echo "<br>";

echo "столица України -$capital[Ukraine]. населення України - $naselenna[ukr] млн людей"

$auto["bmw"] = array("color" => "білий", "year" => "2005", "pr" => "2000");
$auto["audi"] = array("color" => "синій", "year" => "1985", "pr" => "122000");

echo "<br>рік бмв-" . $auto["bmw"]["year"];

?>
</body>
</html>

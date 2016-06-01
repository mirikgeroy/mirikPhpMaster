<?php
/**
 * Created by PhpStorm.
 * User: Mirik Geroy
 * Date: 01.06.2016
 * Time: 8:52
 */
var_dump(boardFill(1));
echo "<br>";
echo "<br>";
var_dump(generator(1));
echo "<br>";
echo "<br>";
var_dump(generator(3));
echo "<br>";
echo "<br>";
$koord = generator(1);
var_dump($koord);

echo "<br>";
echo "<br>";
print_r($koord[0][0]."-".$koord[0][1]);
echo "<br>";


echo '
<html>
<head>
</head>
<body>
<table>
	<tr><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<div class="table-responsive">
  <table class="table">
    
  </table>
</div>

</body>
</html>';

/**
 * @param $p
 * @return array
 */

function boardFill($p)
{
    $koord = generator($p);
    var_dump($koord);
    echo "<br>";
    echo "<br>";
    $cell = 0;
    $cell1=1;
    $board = array();
    $map = array(1 => "a", 2 => "b", 3 => "c", 4 => "d", 5 => "e", 6 => "f", 7 => "g", 8 => "h");
    for ($i = 1; $i <= count($map); $i++) {
        $row = array();
        for ($j = 1; $j <= 8; $j++) {
            $row[$j] = $cell;
        }
        $board[$map[$i]] = $row;
        if (in_array($koord, $board))  {
            $board[$map[$i]] = $cell1;
        }
    }
    return $board;
}

function generator($cellsCount)
{
    $result = array();
    while (count($result) + 1 <= $cellsCount) {
        $x = rand(1, 8);
        $y = rand(1, 8);
        $koord = array($x, $y);
        if (!in_array($koord, $result)) {
            $result[] = $koord;
        }
    }
    return $result;
}
<?php
/**
 * Created by PhpStorm.
 * User: Mirik Geroy
 * Date: 31.05.2016
 * Time: 17:10
 */

var_dump(generator(3));


function board()
{
    $pos[$i] = rand(0, 0);
    $board = array(
        'a' => array(1 => $pos[$i], 2 => $pos[$i], 3 => $pos[$i], 4 => $pos[$i], 5 => $pos[$i], 6 => $pos[$i], 7 => $pos[$i], 8 => $pos[$i]),
        'b' => array(1 => $pos[$i], 2 => $pos[$i], 3 => $pos[$i], 4 => $pos[$i], 5 => $pos[$i], 6 => $pos[$i], 7 => $pos[$i], 8 => $pos[$i]),
        'c' => array(1 => $pos[$i], 2 => $pos[$i], 3 => $pos[$i], 4 => $pos[$i], 5 => $pos[$i], 6 => $pos[$i], 7 => $pos[$i], 8 => $pos[$i]),
        'd' => array(1 => $pos[$i], 2 => $pos[$i], 3 => $pos[$i], 4 => $pos[$i], 5 => $pos[$i], 6 => $pos[$i], 7 => $pos[$i], 8 => $pos[$i]),
        'e' => array(1 => $pos[$i], 2 => $pos[$i], 3 => $pos[$i], 4 => $pos[$i], 5 => $pos[$i], 6 => $pos[$i], 7 => $pos[$i], 8 => $pos[$i]),
        'f' => array(1 => $pos[$i], 2 => $pos[$i], 3 => $pos[$i], 4 => $pos[$i], 5 => $pos[$i], 6 => $pos[$i], 7 => $pos[$i], 8 => $pos[$i]),
        'g' => array(1 => $pos[$i], 2 => $pos[$i], 3 => $pos[$i], 4 => $pos[$i], 5 => $pos[$i], 6 => $pos[$i], 7 => $pos[$i], 8 => $pos[$i]),
        'h' => array(1 => $pos[$i], 2 => $pos[$i], 3 => $pos[$i], 4 => $pos[$i], 5 => $pos[$i], 6 => $pos[$i], 7 => $pos[$i], 8 => $pos[$i]),
    );
    return $board;
}

function boardFill($p)
{

    $cell = 0;
    $board = array();
    /*    $map = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5, "f" => 6, "g" => 7, "h" => 8,"i"=>9);*/
    $map = array(1 => "a", 2 => "b", 3 => "c", 4 => "d", 5 => "e", 6 => "f", 7 => "g", 8 => "h");

    for ($i = 1; $i <= count($map); $i++) {
        $row = array();
        for ($j = 1; $j <= 8; $j++) {
            $row[$j] = $cell;
        }
        $board[$map[$i]] = $row;
    }
    return $board;
}

function generator($cellsCount)
{
    $result = array();
    while (count($result)+1 <= $cellsCount) {
        $x = rand(1, 8);
        $y = rand(1, 8);
        $koord = array($x, $y);
        if (!in_array($koord, $result)) {
            $result[] = $koord;
        }
    }
return $result;
}


//$pos = rand(0, 0);
//$board = array(
//    'a' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
//    'b' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
//    'c' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
//    'd' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
//    'e' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
//    'f' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
//    'g' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
//    'h' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
//);
//echo '<br>';
//echo $board[c][5];

function horse($x, $y)
{

}
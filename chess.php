<?php
/**
 * Created by PhpStorm.
 * User: Mirik Geroy
 * Date: 31.05.2016
 * Time: 17:10
 */

var_dump(board());

function board()
{
    $pos = rand(0, 0);
    $board = array(
        'a' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
        'b' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
        'c' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
        'd' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
        'e' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
        'f' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
        'g' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
        'h' => array(1 => $pos, 2 => $pos, 3 => $pos, 4 => $pos, 5 => $pos, 6 => $pos, 7 => $pos, 8 => $pos),
    );
    return $board;
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

function horse($x,$y)
{
    
}
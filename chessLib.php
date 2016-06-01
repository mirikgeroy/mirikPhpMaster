<?php
/**
tyt tilki funkcii
 */
function boardFill($p)
{
    $koord = generator($p);

    $zeroSell = 'X';
    $oneSell = '0';
    $board = array();
    $map = array(1 => "a", 2 => "b", 3 => "c", 4 => "d", 5 => "e", 6 => "f", 7 => "g", 8 => "h");
    for ($i = 1; $i <= count($map); $i++) {
        $row = array();
        for ($j = 1; $j <= 8; $j++) {
            $checkedKoords = array($i, $j);
            if (in_array($checkedKoords, $koord)) {
                $row[$j] = $zeroSell;
            } else {
                $row[$j] = $oneSell;
            }
        }
        $board[$map[$i]] = $row;
    }
    return $board;
}

/**
 * @param array $board
 * @return string
 */
function renderBoard(array $board)
{
    $result = '<table border="1" align="center" >';
    foreach ($board as $row) {
        $result.='<tr>'; //
        foreach ($row as $cell) {
            if ($cell=='0'){
                $result.='<td height="100" width="100" style="background: green">'.$cell.'</td>';
            }
            else{
                $result.='<td height="100" width="100" style="background: red">'.$cell.'</td>';
            }
        }
        $result.='</tr>';
    }
    $result.='</table>';
    return $result;
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
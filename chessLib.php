<?php
/**
 * tyt tilki funkcii
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
    $result .= '<tr>';
    $result .= '<td></td>';
    for ($i = 1; $i <= 8; $i++) {
        $result .= "<td align='center'>$i</td >";
    }
    $result .= ' </tr > ';
    $cellSize = 50;
    foreach ($board as $key => $row) {
        $result .= '<tr > ';
        $result .= "<td>$key</td>";
        foreach ($row as $cell) {
            if ($cell == '0') {
                $result .= renderCell($cell, $cellSize, 'green');
            } elseif ($cell == 'X') {
                $result .= renderCell($cell, $cellSize, 'red');
            } elseif ($cell == '2') {
                $result .= renderCell($cell, $cellSize, 'brown');
            } elseif ($cell == '3') {
                $result .= renderCell($cell, $cellSize, 'pink');
            } else {
                $result .= renderCell($cell, $cellSize, 'yellow');
            }
        }
        $result .= ' </tr > ';
    }
    $result .= '</table > ';

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

/**
 * @param integer $cellSize
 * @param integer $cell
 * @param string $color
 * @return string
 */
function renderCell($cell, $cellSize, $color)
{
    return "<td height='$cellSize' width='$cellSize' style='background: $color' align='center'>$cell</td>";
}

/**
 * @param array $coords
 * @param array $board
 * @param integer $element
 */
function insertShapes($coords, $board, $element)
{
    $map = array(1 => "a", 2 => "b", 3 => "c", 4 => "d", 5 => "e", 6 => "f", 7 => "g", 8 => "h");
    foreach ($coords as $coord) {
        $x = $map[$coord[0]];
        $y = $coord[1];
        $board[$x][$y] = $element;
    }

    return $board;
}

/**
 * @param integer $x
 * @param integer $y
 * @return array
 */
function canrun($x, $y)
{
    $canrun = [];
    if ($x >= 1 and $x <= 8 and $y >= 1 and $y <= 8) {
        for ($i = -2; $i <= 2; $i++) {
            for ($j = -2; $j <= 2; $j++) {
                if (abs($i) != abs($j) && $i != 0 && $j != 0) {
                    $canrun = getCoord($x, $y, $i, $j, $canrun);
                }
            }
        }
    } else {
        throw new  Exception('введены неадекватны координати');
    }

    return $canrun;
}

/**
 * @param $x
 * @param $y
 * @param $i
 * @param $j
 * @param array $canrun
 * @return array
 */
function getCoord($x, $y, $i, $j, $canrun)
{
    $resX = $x + $i;
    $resY = $y + $j;
    if ($resX >= 1 && $resX <= 8 && $resY >= 1 && $resY <= 8) {
        $canrun[] = [$resX, $resY];
    }

    return $canrun;
}

/**
 * @return array
 */
function getMap()
{
    return array(1 => "a", 2 => "b", 3 => "c", 4 => "d", 5 => "e", 6 => "f", 7 => "g", 8 => "h");
}

function maxShape(array $shapeCoordinates, array $board)
{
    $maxKoord = [1, 1];
    $maxValue = 0;
    foreach ($shapeCoordinates as $coordinate) {
        $value = $board[getMap()[$coordinate[0]]][$coordinate[1]];
        if ($maxValue < $value) {
            $maxKoord = $coordinate;
            $maxValue = $value;
        }
    }
    return $maxKoord;
}

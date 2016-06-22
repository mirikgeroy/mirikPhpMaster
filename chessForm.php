<?php
include('chessLib.php');
if (isset($_POST['count'])) {
    $count = $_POST['count'];
} else {
    $count = 0;
}
$checked = isset($_POST['enter']) ? 'checked' : '';
?>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>ШАХМАТИ</title>
    </head>
    <form action="chessForm.php" method="POST" name="form">
        кількість занятих полів:<input type="text" name="count" value="<?php echo $count ?>"><br>
        виводити зайняті поля на доску:<input type="checkbox" name="enter" <?php echo $checked ?>><br>
        координата коня Y:<input type="text" name="koord1" value="<?php echo isset($_POST['koord1'])?:'' ?>">
        координата коня X:<input type="text" name="koord2" value="<?php echo isset($_POST['koord2'])?:'' ?>">
        <input name="submit" type="submit">
    </form>
<?php

$board = boardFill($count);
$map = getMap();
if (isset($_POST['enter'])) {
    $board = insertShapes([[4, 7]], $board, 4);
    $board = insertShapes([[4, 3]], $board, 5);
    $board = insertShapes([[6, 3]], $board, 6);
    $board = insertShapes([[7, 4]], $board, 7);
}

echo '<div style="float: left">' . renderBoard($board) . '</div>';
if (isset($_POST['koord1']) && isset($_POST['koord2'])) {
    $x = $_POST['koord1'];
    $y = $_POST['koord2'];
    $board[$map[$x]][$y] = 3;
    $canRun = canrun($x, $y);
    $horsePosition=maxShape($canRun, $board);
    $board = insertShapes([$horsePosition], $board, 3);
}
echo renderBoard($board);


?>
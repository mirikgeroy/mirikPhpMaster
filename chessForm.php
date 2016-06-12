<?php
include('chessLib.php');
if (isset($_POST['count'])) {
    $count = $_POST['count'];
} else {
    $count = 0;
}

?>
    <form action="chessForm.php" method="POST" name="form">
        <input type="text" name="count" value="<?php echo $count ?>">
        <input name="submit" type="submit">
    </form>
<?php
$x=5;
$y=5;
$board = boardFill($count);
$map=getMap();
$board[$map[$x]][$y]=3;
$canRun = canrun($x, $y);
$boardWithHorse = insertShapes($canRun, $board, 2);
echo renderBoard($boardWithHorse);
?>
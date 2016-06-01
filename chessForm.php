<?php
include ('chessLib.php');
?>
<form action="chessForm.php" method="POST" name="form">
  <input type="text" name="count"  value="<?php echo $_POST['count']?>">
    <input name="submit" type="submit" >
</form>
<?php
echo renderBoard(boardFill($_POST['count']));
?>
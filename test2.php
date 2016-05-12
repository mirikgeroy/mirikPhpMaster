<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>передача методом POST</title>
</head>

<body>

<?php
/*
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 12.05.2016
 * Time: 9:37
 */
echo '<form action = "test3.php" method = "post" name = "form1" target = "_blank" >

 ';
$i=1;
while ($i<30){
echo "<p > введіть ваше імя #$i:<br ><input name = 'name $i' type = 'text' size = '20' </p >";
    $i++;
}
echo '<p ><input type = "submit" value="если мы не указываем название этой кнопки, то оно бьудет просто отправить запрос"></p ></form>';
?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>first php page</title>
</head>

<body>
<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 12.05.2016
 * Time: 10:19
 */

echo "Ваш ip адрес: " . $_SERVER['REMOTE_ADDR'];
echo "<br>Ваш браузер і ОС: " . $_SERVER['HTTP_USER_AGENT'];
if (isset($_SERVER['HTTP_REFERER'])) {
    echo "<br>Ви прийшли на дану сторінку з адреси: " . $_SERVER['HTTP_REFERER'];
}
else
{
    echo "<br>Ви прийшли на дану сторінку напряму!";
}
?>

</body>
</html>

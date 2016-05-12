<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>first php page</title>
</head>

<body>
<?php

$a = 1;
$b = 1;
$c=7;
$d=7;
$cat="juli";
$dog="hart";

if  ($a==$b and $c==$d)
{
    echo <<<here
привіт миря, як справи???
here;

    if ($cat == $dog)
    {
        echo "в сат і дог різні імена!";
    }
}
else
{
    echo "змінні не рівні!";
}


?>
<a href="test4.php" target="_blank">сторінка test4.php</a>
</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>first php page</title>
</head>

<body>
<?php

$name = "Myroslav";
$age = 25;

echo "$name";

echo "<br>car";

echo "my fiend's name is - $name";

if (isset($c))
{
    echo "<br>с існує";
}
else
{
    echo "<br>с не існує";
}
$v=10;
unset($v);
echo "<br>$v";



?>

</body>
</html>
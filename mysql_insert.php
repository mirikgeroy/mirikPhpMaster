<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>зєднуємося з БД</title>
</head>

<body>
<?php

$db = mysqli_connect("localhost", "alex", "123");

mysqli_select_db($db, "firstbd");

$result = mysqli_query($db,"INSERT INTO firma (name, lastname, posada) VALUE ('андрій', 'андрієвський', 'водій')");
if ($result == 'true') {
    echo "інфо в базу добаллено успішно!";
} else {
    echo "інфо в базу не добаллено!";
}
?>

</body>
</html>

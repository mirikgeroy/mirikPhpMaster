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
mysqli_set_charset($db,'utf8');
$result = mysqli_query($db, "SELECT * from firma ");
$myrow = mysqli_fetch_array($result);

do {
    echo "сотрудник № " . $myrow['id'] . "<br>";
    echo $myrow['name'] . "<br>";
    echo $myrow['lastname'] . "<br>";
    echo $myrow['posada'] . "<br>";

//    printf("сотрудник № %s<br>%s<br>%s<br>%s<br>",$myrow['id'],
//$myrow['name'],$myrow['lastname'],$myrow['posada']);

} while ($myrow = mysqli_fetch_array($result));
?>

</body>
</html>

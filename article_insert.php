<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Ввід до БД статті</title>
</head>

<body>
<?php

if (isset($_POST['title'])) {
    $title = $_POST['title'];
}
if (isset($_POST['text'])) {
    $text = $_POST['text'];
}
if (isset($_POST['tegs'])) {
    $tegs = $_POST['tegs'];
}
if (!$db = mysqli_connect("localhost", "alex", "123")) {
    die('Database is no connected');
}
//var_dump($db);
mysqli_set_charset($db, 'utf8');
mysqli_select_db($db, "ARTICLE");
//$date = strtotime('today');
$time = time();
$sql = "INSERT INTO statti (`date`, `title`, `text`, `tegs`) VALUE ($time, '$title', '$text', '$tegs')";
echo $sql;
$result = mysqli_query($db, $sql);
if ($result == 'true') {
    echo "інфо в базу добалено успішно";
} else {
    var_dump(mysqli_error($db));
    echo "інфо в базу не добалено!";
}


$resul = mysqli_query($db, "SELECT * from statti");
$myrow = mysqli_fetch_array($resul);
do {

    printf("<br> Стаття № %s<br>%s<br>%s<br>%s<br>",$myrow['id'],
        $myrow['date'],$myrow['title'],$myrow['text'], $myrow['tegs']);

} while ($myrow = mysqli_fetch_array($resul));

?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>зєднуємося з БД</title>
</head>

<body>
<?php
if (isset($_post['name'])) {
    $name = $_POST['name'];
}
if (isset($_post['lastname'])) {
    $lastname = $_POST['lastname'];
}
if (isset($_post['posada'])) {
    $posada = $_POST['posada'];
}

$db = mysqli_connect("localhost", "alex", "123");
mysqli_set_charset($db, 'utf8');
mysqli_select_db($db, "firstbd");

$result = mysqli_query($db, "INSERT INTO firma (name, lastname, posada) VALUE ('$name', '$lastname', '$posada')");
if ($result == 'true') {
    echo "інфо в базу добалено успішно!";
} else {
    echo "інфо в базу не добаллено!";
}
?>

</body>
</html>

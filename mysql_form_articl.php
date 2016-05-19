<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Форма для статті</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>



<form action="mysql_insert.php" method="post" name="form">
    <p>введіть імя співробітника:<br><input name="name" type="text" size="20" maxlength="40"></p>
    <p>Введіть прізвище:<br><input name="lastname" type="text" size="20" maxlength="40"></p>
    <p>Посада:<br><input name="lastname" type="text" size="20" maxlength="40"></p>
    <p><input name="submit" type="submit" value="занести нового співробітника"></p>
</form>



</body>
</html>

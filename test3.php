<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>передача методом POST</title>
</head>

<body>
<?php
foreach($_POST as $element) {
    $name = $element;

    echo "імя введене на попередній сторінці: прізвище $element<br>";
}
?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>передача методом POST</title>
</head>

<body>

<?php

echo '<form action = "test3.php" method = "post" name = "form1" target = "_blank" > ';
$i = 1;
while ($i < 30) {
////mogna tak
//echo "<p > введіть ваше імя #$i:<br ><input name = 'name $i' type = 'text' size = '20' </p >";
////a mogna tak
echo '<p > введіть ваше імя #' . $i . ':<br ><input name = "name ' . $i . '" type = "text" size = "20" </p >';
////a mogna tak
//    echo sprintf(
//        '<p > введіть ваше імя #%s:<br ><input name = "name %s" value="%s" type = "text" size = "20" </p >',
//        $i,
//        $i,
//        'стицько');
    echo
    '<p>
    <input type="submit" value="відправити">

</p>
';
    $i++;
} //<-вейрайся назад и вчи що робить ця скобка
echo '</form>';
?>

</body>
</html>

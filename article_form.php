<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Форма для нової статті</title>
</head>
<body>
<div class="container">

    <form action="article_insert.php" method="POST" name="form" class="form-horizontal">
        <fieldset>
            <legend>НОВА СТАТТЯ</legend>
            <div class="form-group">
                <label for="title" class="col-lg-2 control-label">Заголовок</label>
                <div class="col-lg-10">
                    <input name="title" type="text" class="form-control" id="title" placeholder="Заголовок" maxlength="200">
                </div>
            </div>
            <div class="form-group">
                <label for="text" class="col-lg-2 control-label">Текст статті</label>
                <div class="col-lg-10">
                    <textarea name="text" class="form-control" rows="10" id="text"></textarea>
                    <span class="help-block">Вставте текст своєї нової статті</span>
                </div>
            </div>
            <div class="form-group">
                <label for="tegs" class="col-lg-2 control-label">Теги</label>
                <div class="col-lg-10">
                    <input name="tegs" type="text" class="form-control" id="tegs" placeholder="Теги">
                </div>
            </div>
        </fieldset>
        <input name="submit" type="submit" class="btn btn-success" value="занести нову статтю">
    </form>
</div>
<?php

echo "<br>" . date(' d.m.Y H:i:s'), "<br>";
echo "<br>";


// получим целое число, соответствующее "сегодня", т.е. 00:00:00 сегодняшней даты
$d1 = strtotime('today');

// для отладки выведем как есть
echo $d1, "\n"; // выведется большое целое число
echo "<br>";
// узнаем сколько секунд прошло с полуночи
echo time() - $d1, "\n"; // выведется не очень большое целое число
echo "<br>";
// получим дату "завтра"
$d2 = $d1 + 60 * 60 * 24;

// сравним даты
if ($d1 < $d2) {
    echo "Сегодня наступает раньше чем завтра <br>";
} else {
    echo "Случился провал во времени\n";
}

// наконец мы вычислили всё, что нужно и хотим красиво вывести дату и время на страницу
echo date('d.m.Y H:i:s', $d2), "\n"; // что-то вроде '22.11.2014 00:00:00'


?>


</body>
</html>
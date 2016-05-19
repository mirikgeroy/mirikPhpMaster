<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Нова стаття</title>
</head>
<body>
<div class="container">

        <form class="form-horizontal">
        <fieldset>
            <legend>НОВА СТАТТЯ</legend>
            <div class="form-group">
                <label for="date" class="col-lg-3 control-label">Дата</label>
                <div class="col-lg-3">
<!--                    $d=data("d-m-Y")-->
                    <input  type="text" class="form-control" id="date" placeholder="Дата">
                </div>
                <script type="text/javascript">
                    $('#datetimepicker2').datetimepicker({ locale: 'ru' });


                </script>
            </div>
            <div class="form-group">
                <label for="inputauthor" class="col-lg-3 control-label">Автор</label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="inputauthor" placeholder="Автор">
                 </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-lg-2 control-label">Заголовок</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="title" placeholder="Заголовок">
                </div>
            </div>
            <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Текст статті</label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="10" id="textArea"></textarea>
                    <span class="help-block">Вставте текст своєї нової статті</span>
                </div>
            </div>
            <div class="form-group">
                <label for="tegs" class="col-lg-2 control-label">Теги</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="title" placeholder="Теги">
                </div>
            </div>

        </fieldset>
            <input name="submit" type="submit" class="btn btn-success" value="занести нову статтю">
        </form>
    </div>
<?php
echo "<br>".date(' d.m.Y H:i:s', $d2), "\n";
echo '12.10.1992' + 1;
echo "<br>";
// получим целое число, соответствующее "сегодня", т.е. 00:00:00 сегодняшней даты
$d1 = strtotime('today');

// для отладки выведем как есть
echo $d1, "\n"; // выведется большое целое число
?>


</body>
</html>
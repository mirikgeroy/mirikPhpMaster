<?php
/**
 * Created by PhpStorm.
 * User: Татьяна
 * Date: 11.05.2016
 * Time: 11:23
 */

$sposob = "";

switch ($sposob)
{
    case "bank":
        echo "<p> щоб оплатити через банк...";
        break;

    case "post":
        echo "<p> щоб оплатити через post...";
        break;

    case "western":
        echo "<p> щоб оплатити через western...";
        break;

    default:
        echo "<p>ви не вибрали спосіб оплати";
        break;
}

?>
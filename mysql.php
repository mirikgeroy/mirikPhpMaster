<?php
/**
 * Created by PhpStorm.
 * Date: 12.05.2016
 * Time: 13:32
 */
$db = mysqli_connect("localhost", "alex", "123");
mysqli_select_db($db, "firstbd");

$result = mysqli_query($db,"SELECT * from firma ");
$myrow = mysqli_fetch_array($result);

echo  $myrow["name"];
$myrow = mysqli_fetch_array($result);
echo "<br>";
echo  $myrow["name"];
$myrow = mysqli_fetch_array($result);
echo "<br>";
echo  $myrow["name"];

?>
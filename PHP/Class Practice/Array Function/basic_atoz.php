
<?php

function num(){
    echo is_numeric(12);
}
num();
echo"<br>";

function num2(){
    echo round(34.6545);
}
num2();

echo"<br>";

function num3(){
    echo("Random Number:".rand(1000,9999));
}
num3();

//b.date_format()

$d1 =date_create("28-01-2024");
$d2 =date_create("15-02-2024");
$diff =date_diff($d1,$d2);
echo $diff->format("%R%a days");
echo "<br>";
date("d-m-y");
echo date("1");

echo "<br>";
echo date('h i sa');


?>
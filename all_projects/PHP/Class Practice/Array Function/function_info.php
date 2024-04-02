<?php
function Info (){
    echo "This is my First page";

}
Info();
echo "<br>";

function name ($num1, $num2){
    echo $num1+$num2;
}

name (3,4);
echo "<br>";

function Country ($name1, $name2){
    echo $name1." is my country and in". $name2. " we got independence of our country.";
}
Country("Bangladesh"," 1971");


//return keyword


?>
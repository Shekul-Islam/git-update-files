<?php
$a=array("Kitten","cat");
array_unshift($a,"cow","goat","elephant");

foreach($a as $value){
    echo $value.' ,';
}

?>
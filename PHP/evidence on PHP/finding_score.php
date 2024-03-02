<form action="" method ="post">

<h2>Enter your Score</h2>
<input type="number", name ="score">
<input type="submit", name= "door"><br><br>

<?php
$marks =$_POST["score"];


if ($marks>=80 && $marks<=100)
{
    echo "Result: A+";
}
elseif($marks>=70 && $marks<=79)
{
    echo "Result: A";
}
elseif($marks>=60 && $marks<=69)
{
    echo "Result: A-";
}
elseif($marks>=60 && $marks<=69)
{
    echo "Result: B+";
}
elseif($marks>=50 && $marks<=59)
{
    echo "Result: c";
}
elseif($marks>=40 && $marks<=49)
{
    echo "Result: D"
}
else($marks>=1 && $marks<=39)
{
    echo "Result: Fail"
}
?>
</form>
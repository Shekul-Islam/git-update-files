<h1> Find Prime or composite Number</h1>

<form method='post'>
    Enter a Number:
    <input type="text" name="fname">
    <input type="submit" name="submit">
</form>

<?php
$b=$_POST["fname"];
$c=0;
if(isset($_POST["submit"]))
{
    if($b==0 || $b==1)
    {
        echo "Not Prime or composite";
        exit();
    }

    for($i=2;$i<$b;$i++)
    {
        if($b%$i==0)
        $c++;
    }

    if($c==0)

    echo "$b Prime Number";
    else
    echo "$b Composite Number";
}?>
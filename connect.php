<?php
$cwithdb=new mysqli('localhost','root','','company');

if(isset($_POST['submit'])){
    $mname=$_POST['mnam'];
    $address =$_POST['address'];
    $mcontact=$_POST['contact'];
    $cwithdb->query("call manu_pro('$mname','$address','$mcontact')");
}

if(isset($_POST['addproduct'])){
    $pname=$_POST['pname'];
    $price=$_POST['price'];
    $mname=$_POST['mname'];
    $cwithdb->query("call product_pro('$pname','$price','$mname')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="#" method="post">
    <h2>Menufacturer Table</h2>
    <table>
       
        <tr>
            <td><label for="mnam">Name</label></td>
            <td><input type="text" name="mnam"></td>
        </tr>

        <tr>
            <td><label for="address">Address</label></td>
            <td><input type="text" name="address"></td>
        </tr>

        <tr>
            <td><label for="contact">contact</label></td>
            <td><input type="text" name="contact"></td>
        </tr>
       <tr>
        <td> <input type="Submit" name="submit", value="submit"></td>
       </tr>
    </table>
</form>



<form action="#" method="post">

    <h2>Product Table</h2>

    <table>
       
        <tr>
            <td><label for="pname">Name</label></td>
            <td><input type="text"  name="pname"></td>
        </tr>

        <tr>
            <td><label for="price">Price</label></td>
            <td><input type="number" id="price" name="price"></td>
        </tr>

        <tr>
            <td><label for="mname"> Menufacturer Name</label>
                <select name="mname">
                    <?php
                    $datastore=$cwithdb->query("select * from manufacturer");
                    while(list($_menuid,$_menuname) = $datastore->fetch_row()){
                        echo "<option value='$_menuid'>$_menuname</option>";
                    }
                    ?>
                   
                </select>
            </td>
        </tr>
        
       <tr>
        <input type="Submit" name="addproduct" value="bsubmit">
       </tr>
    </table>
        
</form>
<br><br>

<!-- <form action="#">
    <table>
    <tr>
        <td><label for="menufacturer">Menufacturer</label></td>
        <td><select name="Select Option" id="menufacturer_id">
            
        </select></td>
        </tr>
        <tr>
        <td> <input type="Submit" name="Delete", value="Delete"></td>
       </tr>
    </table>
</form> -->
</body>
</html>
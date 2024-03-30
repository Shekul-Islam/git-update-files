<?php
$cwithdb=new mysqli('localhost','root','','company');

if(isset($_POST['submit'])){
    $mname=$_POST['name'];
    $mcontact=$_POST['contact'];
    $cwithdb->query("call menu_pro('$mname','$mcontact')");
}

if(isset($_POST['submit'])){
    $pname=$_POST['psubmit'];
    $price=$_POST['Price_n'];
    $p_id=$_POST['menufact'];
    $cwithdb->query("call menu_pro('$pname','$price','menufact')");
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
            <td><label for="name">Name</label></td>
            <td><input type="text" name="name"></td>
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
            <td><input type="text" name="pname"></td>
        </tr>

        <tr>
            <td><label for="price_n">Price</label></td>
            <td><input type="text" name="Price_n"></td>
        </tr>

        <tr>
            <td><label for="menufact"> Menufacturer Name</label>
                <select name="menufact">
                    <?php
                    $menufact=$db->query("select * from menufacturer");
                    while(list($_menuid,$_menuname) = $menufact->fetch_row()){
                        echo "<option value='$_menuid'>$_menuname</option>";
                    }
                    ?>
                   
                </select>
            </td>
        </tr>
       <tr>
        <td></td>
        <td> <input type="Submit" name="addproduct", value="submit"></td>
       </tr>
    </table>
        
<!-- </form>
<br><br>
<form action="#">
    <table>
    <tr>
        <td><label for="menufacturer">Menufacturer</label></td>
        <td><select name="Select Option" id="menufacturer_id">
            <option value="Samsung">Samsung</option>
            <option value="Vivo">Vivo</option>
            <option value="Apple">Apple</option>
            <option value="hp">Hp</option>
        </select></td>
        </tr>
        <tr>
        <td> <input type="Submit" name="Delete", value="Delete"></td>
       </tr>
    </table>
</form> -->
</body>
</html>
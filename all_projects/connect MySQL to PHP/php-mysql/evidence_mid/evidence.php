
<?php
$db = new mysqli('localhost','root','company');
if(isset($_POST['btnsubmit'])){
    $nname=$_POST['nname'];
    $ncontact=$_POST['ncontact'];
    $db->query("call add_manufacture('$nname','$ncontact')");

}

if (isset($_POST['addProduct'])){
    $_

}


?>









<h2>Manufacturer Table</h2>

<form action="#" method="post">
    <table>
        <tr>
            <td><label for="nname">Name</label></td>
            <td><input type="text" name="nname"></td>
        </tr>
        <tr>
            <td><label for="ncontact">Contact</label></td>
            <td><input type="number" name="ncontact"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btnSubmit" value="Submit"></td>
        </tr>
    </table>
</form>

<h2>Product Table</h2>
<form action="#" method="post">
    <table>
        <tr>
            <td><label for="pname">Name</label></td>
            <td><input type="text" name="pname"></td>
        </tr>
        <tr>
            <td><label for="price">Price</label></td>
            <td><input type="number" name="price"></td>
        </tr>
        <tr>
            <td><label for="m_id">Manu_Id</label></td>
            <td><input type="number" name="m_id"></td>
        </tr>
        <tr>
            <td></td>
            <td><label for="m_id">Manufacturer Name</label></td>
            <td>
                <select name="m_id">
                    <?php
                    $m_id =$db->query("select * from manufacturer")
                    while (list($_mid,$_mname)=$m_id->fetch_row()){
                        echo "<option value='$_mid'>$_mname</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="addproduct" value="Submit"></td>
        </tr>
    </table>
</form>
<?php
$connectwithdb = new mysqli('localhost','root','','company');

    if(isset($_POST['mbtn'])){
        $mname = $_POST['mname'];
        $maddress = $_POST['maddress'];
        $contact = $_POST['contact'];
        $connectwithdb->query("call manufacturer_demo('$mname','$maddress','$contact')");
    }
    
    if(isset($_POST['pbtn'])){
        $pname = $_POST['pname'];
        $price = $_POST['price'];
        $manufacturer = $_POST['manufacturer'];
        $connectwithdb->query("call product_demo('$pname','$price','$manufacturer')");
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
    <h3>Manufacturer Table</h3>
    <form action="#" method="post">
        <label for="mname">Name</label>
        <input type="text" id="mname" name="mname"><br><br>
        <label for="maddress">Address</label>
        <input type="text" id="maddress" name="maddress"><br><br>
        <label for="contact">Contact</label>
        <input type="text" id="contact" name="contact"><br><br>
        <input type="submit" value="Submit" name="mbtn">
    </form>

    <br><br>

    <h3>Product Table</h3>
    <form action="#" method="post">
        <label for="pname">Product Name</label>
        <input type="text" id="pname" name="pname"><br><br>
        <label for="price">price</label>
        <input type="text" id="price" name="price"><br><br>
        <label for="manufacturer">manufacturer</label>
        <select name="manufacturer" id="manufacturer">
            <?php
                $manufacturer = $connectwithdb->query("SELECT * FROM manufacturer"); #manufacturer Table name
                while(list($id,$name,$address,$contact) =  $manufacturer->fetch_row()){
                    echo "<option value='$id'>$name</option>";   
                }
            ?>
        </select><br><br>
        <input type="submit" value="Submit" name="pbtn">
    </form>
    <br><br>
    <form action="#" method="post">
        
    </form>

    

    <form action="#" method="post">
	<table>
		<tr>
			<td><label for="manufac">Manufacturer</label></td>
			<td>
				<select name="manufac">
					<?php 
						$manufac = $db->query("select * from manufacturer");
						while(list($_mid,$_mname) = $manufac->fetch_row()){
							echo "<option value='$_mid'>$_mname</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr> 
			<td></td>
			<td><input type="submit" name="delmanufact" value="delete" /></td>
		</tr>
	</table>
</form>



<h3>View Product</h3>

<table border="1" style="border-collapse: collapse;" > 
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Price</th>
		<th>Manufacturer</th>
		<th>Contact</th>
	</tr>
	<?php 
		$product = $db->query(" select * from view_product ");
		while(list($_id,$_name,$_price,$_mname,$_mcont) = $product->fetch_row()){
			echo "<tr> 
					<td>$_id</td>
					<td>$_name</td>
					<td>$_price</td>
					<td>$_mname</td>
					<td>$_mcont</td>
				</tr>";
		}
	
	?>
</table>
</body>
</html>
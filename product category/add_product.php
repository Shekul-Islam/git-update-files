<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveproduct.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Product</h4></center>
<hr>
<div id="ac">
<span>Prodcuct Code : </span><input type="text" style="width:265px; height:30px;" name="code" ><br>
<span>Category : </span><select name="" id="" style="width:265px; height:30px;">
		<option value=""> Category </option>
		<option value=""> Sub Category </option>
	</select><br>
<span>Description : </span><textarea style="width:265px; height:50px;" name="name"> </textarea><br>
<!-- <span>Date Arrival: </span><input type="date" style="width:265px; height:30px;" name="date_arrival" /><br> -->
<!-- <span>Expiry Date : </span><input type="date" value="<?php echo date ('M-d-Y'); ?>" style="width:265px; height:30px;" name="exdate" /><br> -->
<span>Cast Price : </span><input type="text" id="txt2" style="width:265px; height:30px;" name="o_price" onkeyup="sum();" Required><br>
<span>Selling Price : </span><input type="text" id="txt1" style="width:265px; height:30px;" name="price" onkeyup="sum();" Required><br>
<!-- <span>Profit : </span><input type="text" id="txt3" style="width:265px; height:30px;" name="profit" readonly><br> -->
<span>Quantity : </span><input type="number" style="width:265px; height:30px;" min="0" id="txt11" onkeyup="sum();" name="qty" Required ><br>
<span></span><input type="hidden" style="width:265px; height:30px;" id="txt22" name="qty_sold" Required ><br>
<span>Supplier : </span>
<select name="supplier"  style="width:265px; height:30px; margin-left:-5px;" >
<option></option>
	<?php
	include('../connect.php');
	$result = $db->prepare("SELECT * FROM supliers");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['suplier_name']; ?></option>
	<?php
	}
	?>
</select><br>
<div >
<button class="btn btn-sm-primary" type="button" name="Submit" value="Submit" style="width:267px;"> Submit</button>
</div>
</div>
</form>

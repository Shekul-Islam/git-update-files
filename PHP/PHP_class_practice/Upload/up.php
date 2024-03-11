<?php
if (isset($_POST["btnsubmit"])){ 
  $file_name = $_FILES['img']['name'];
  $tmp_file = $_FILES['img']['tmp_name'];
  
  
  $img = 'image/';
 
   if(!empty($filename)){ 
    move_uploaded_file($tmpfile,$img.$filename);
   } else { 
    echo "please select a file";
   }
}
 
?>

<body>
<form action="" method="post" enctype="multipart/form-data"> 
  Image :
  <input type="file" name="myfile" ><br><br>
  <input type="submit" name="btnsubmit" value="Upload"> 
</form>

<?php
if(isset($_POST["btnsubmit"])){ 
	echo "<image src='$img/$file_name' width='300px'>";
}
?>
</body>
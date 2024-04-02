<?php 
$conn = mysqli_connect('localhost','root','','myfproject');
if (isset($_GET['deleteid'])){ 
    $deleteid = $_GET['deleteid'];

     $sql = "DELETE FROM  users WHERE id = $deleteid";
     if(mysqli_query($conn, $sql) == TRUE){ 
        header('location:view.php');
     }
}


?>

<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="container"> 
    <div class="row"> 
    <p>
     <a href="insert.php">Add New Data</a>
    </p>
        <div class="col-sm-1"></div>
        <div class="col-sm-10 pt-4 mt-4 border border-success"> 
           
            <h3 class="text-center p-2 m-2 bg-success text-white">User Information</h3>
           
            <?php 
            $sql = 'SELECT * FROM users';
            
            $query = mysqli_query($conn, $sql);
            echo "<table class='table table-success'>
             <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
             </tr>";
           while ($data = mysqli_fetch_assoc($query)){ 

            $id = $data['id'];
            $name = $data['name'];
            $email = $data['email'];
            $phone = $data['phone'];

            echo "<tr> 
                    <td>$id</td>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td>
                    <span class='btn btn-success'><a href='edit.php?id=$id' class='text-white text-decoration-none'>Edit</a></span>
                    <span class='btn btn-danger'><a href='view.php?deleteid=$id' class='text-white text-decoration-none'>Delete</a></span>
                    </td>
                </tr>";
           }
            ?>
        </div>
        <div class="col-sm-1"></div>
    </div>
   </div>
</body>
</html>
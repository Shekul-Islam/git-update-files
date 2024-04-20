<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>List of Customer</h2>
        <a class="btn btn-primary" href="/pos/create.php" role="button">New Customer</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername ="localhost";
                $username ="root";
                $password ="";
                $datebase ="pos";

                //Create Connection
                $connection = new mysqli($servername,$username,$password,$datebase);
                //Check Connection
                if($connection->connect_error){
                    die("connection failed:".$connection->connect_error);
                }

                //read all row from database table
                $sql = "SELECT * FROM customer";
                $result =$connection->query($sql);

                if (!$result){
                    die("Invalid query:".$connection->error);
                }

                //read data of each row
                while($row = $result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/pos/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/pos/delele.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                    ";
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>
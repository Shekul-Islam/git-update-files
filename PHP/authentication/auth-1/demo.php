<?php 
 session_start();

 if(!isset($_SESSION["sname"])){
	 header("location:login.php");
  }
//step 2:
require_once("student_class.php");

// Check if the form is submitted
if (isset($_POST["btnSubmit"])) {
    $id = $_POST["txtId"];
    $name = $_POST["txtName"];
    $course = $_POST["txtCourse"];
    $phone = $_POST["txtPhone"];

    // Validate phone number
    if (preg_match("/^[0-9+]{11,14}$/", $phone)) {
        // Create a new Student object
        $student = new Student($id, $name, $course, $phone);
        // Save the student data
        $student->save();
        echo "Success!";
    } else {
        echo "Invalid Phone";
    }


    
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
            padding: 20px;
            background-color: #68c8fc;
        }

        form {
            width:75%;
            display: inline-block;
            text-align: left;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 95%;
            margin-bottom: 10px;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
        }

        table, th, td {
            border: 1px solid black;
        }

        fieldset {
            background-color: #b3ccff;
            text-align: center;
            border: 2px solid teal;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            width: 30%;
            height: 350px;
        }
    </style>
</head>
<body>

<fieldset>
    <legend><h2>Student Submission Form</h2></legend>
    <form action="#" method="post">
        <div>
            ID:<br/>
            <input type="text" name="txtId"/>
        </div>

        <div>
            Name<br/>
            <input type="text" name="txtName"/>
        </div>

        <div>
            Course<br/>
            <input type="text" name="txtCourse"/>
        </div>

        <div>
            Phone<br/>
            <input type="text" name="txtPhone"/>
        </div>

        <form action="">
        <div>
            Upload
            <input type="file" name="img">
            <input type="submit" value="submit">
        </div>
        </form>

        <div>
            <input type="submit" name="btnSubmit" value="Submit"/>
        </div>

        
    </form>
</fieldset>

<?php
Student::display_students();
?>

</body>
</html>
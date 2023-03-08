<?php

include_once '../database.php';

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $regno=$_POST['regno'];
    $status=$_POST['status'];
    $password=$_POST['password'];
    $time=date("Y-m-d H:i:s");

    $insert ="INSERT INTO users (fname,lname,regno,status,password,time) VALUES ('$fname','$lname', '$regno','$status','$password','$time')";
    mysqli_query($conn,$insert);
    header('location: ./off-campus-student.php');
    $conn->close();
}


?>


















<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User To System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .form-control{
            outline: 0;
            
        }
    </style>
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Add New Record To Database </h2>
            </div>
           
            <form action="#" method="post">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" required="">
                </div>                        
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Registration Number</label>
                    <input type="text" name="regno" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" name="status" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required="">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="save">
            </form>
        </div>
    </div>        
</div>
</body>
</html>
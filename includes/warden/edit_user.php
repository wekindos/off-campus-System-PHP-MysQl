<?php

include_once '../database.php';
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $regno=$_POST['regno'];
    $status=$_POST['status'];
    $password=$_POST['password'];

    $sql ="UPDATE users SET fname='$fname', lname='$lname', regno='$regno', status='$status', password='$password' WHERE id='$id'";

    $result =$conn->query($sql);
    
    header('location: ./off-campus-student.php');
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id='$id'";
    $result =$conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $fname=$row['fname'];
            $lname=$row['lname'];
            $regno=$row['regno'];
            $status=$row['status'];
            $password=$row['password'];
            $id=$row['id'];
        }

    }
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
           
            <form action="" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" required="">
                </div>                        
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>" required="">
                </div>                        
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control"  value="<?php echo $lname; ?>" required="">
                </div>
                <div class="form-group">
                    <label>Registration Number</label>
                    <input type="text" name="regno" class="form-control"  value="<?php echo $regno; ?>" required="">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" name="status" class="form-control"  value="<?php echo $status; ?>" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password"  value="<?php echo $password; ?>" name="password" class="form-control" required="">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Update">
            </form>
        </div>
    </div>        
</div>

</body>
</html>
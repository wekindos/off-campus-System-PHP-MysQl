<?php

include_once '../database.php';
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $info=$_POST['info'];

    $sql ="UPDATE info SET name='$name', email='$email', info='$info' WHERE id='$id'";

    $result =$conn->query($sql);
    
    header('location: ./off-campus-student.php');
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM info WHERE id='$id'";
    $result =$conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $name=$row['name'];
            $email=$row['email'];
            $info=$row['info'];
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
                <h2>Edit Record To Database </h2>
            </div>
           
            <form action="" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" required="">
                </div>                        
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required="">
                </div>                        
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control"  value="<?php echo $email; ?>" required="">
                </div>
                <div class="form-group">
                                <label for="exampleInputPassword1">Subject</label>
                                <textarea name="info" class="form-control" rows="9">

                                <?php echo $info; ?>
                                </textarea>
                            </div>
                
                <input type="submit" class="btn btn-primary" name="submit" value="Update">
            </form>
        </div>
    </div>        
</div>

</body>
</html>
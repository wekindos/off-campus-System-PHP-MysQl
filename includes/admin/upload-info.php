<?php
session_start();
include_once '../database.php';

if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $info = $_POST['info'];

        // data insertion

        $sql ="INSERT INTO info (name,email,info) VALUES('$name','$email','$info')";
        mysqli_query($conn, $sql);
        echo 'Submitted Successful';
        $conn->close();
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_page</title>
    <link rel="stylesheet" href="../admin//style/admin_page.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="yote">
    
<div class="header">
            <div class="logo">
                <img src="../../assets/image/logo.jpg" alt="must logo" width="200px" height="100" >
            </div>
            <div class="comp-name">
                <h1>MBEYA UNIVERSITY OF SCIENCE AND TECHNOLOGY</h1>
                <h3>OFF-CAMPUS ONLINE SYSTEM</h3>
            </div>
        </div>
        
    
  
        <div class="container-wrapper">
            <div class="wrapper-cont">
                <div class="left-wrapper">
                   
                <a href="./admin_page.php" class="link-a"><div class="link">Dashboard</div></a>
                   <a href="./admin.php" class="link-a"><div class="link">Administrator</div></a>
                   <a href="./warden.php" class="link-a"><div class="link">Off-Campus Warden</div></a>
                   <a href="./off-campus-student.php" class="link-a"><div class="link">Off-Campus Student</div></a>
                   <a href="./upload-info.php" class="link-a"><div class="link">Update News</div></a>

                </div>
                <div class="right-wrapper">
                <!-- 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Welcome ...! &nbsp &nbsp &nbsp &nbsp</strong> You have login to Warden panel. GoodLuck!!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div> -->
                <div class="top-info">
                    <div class="right-info">
                        <a href="./admin_page.php">Home</a>/ <a href="./upload-info.php">Upload_info</a>
                    </div>
                    <div class="user-info">
                        <div class="img">
                            <img src="../../assets/image/avatar.png" width="40" height="40" alt="User image">
                            <div class="name">
                               <?php
                                    if($_SESSION['regno']){
                                        echo $_SESSION['regno'];
                                    }else{
                                        header('location: ../index.php');
                                    }
                               ?>
                            </div>
                        </div>
                        <div class="logout">
                        <a href="../logout.php">Logout</a>
                        </div>
                    </div>


                </div>
                
                <div class="year">
                <div class="academic-year">
                <?php $lyear = date('Y',strtotime("-1 year"));
                echo 'Academic Year ';
                echo $lyear;
                echo " / ";
                $year = date('Y');
                echo $year;
                ?>
            </div>
            <hr>
         </div>
                

               
                    <div class="container">
                    
                        <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="post" action="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Subject</label>
                                <textarea name="info" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        </div>


                    </div>
                </div>
                
            </div>
            <div class="footer">
            <div class="right-footer">
            <p>&copy; 2012 - <?php $year = date('Y'); echo $year; ?> MBEYA UNIVERSITY OF SCIENCE AND TECHNOLOGY</p>
            </div>
            <div class="left-footer">
            Designed and Developed by : WekindosDev's
            </div>
        </div>
        </div>
</div>
    
    <!-- bootstrap  scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
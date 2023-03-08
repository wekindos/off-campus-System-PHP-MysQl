<?php
session_start();
include_once '../database.php';
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_page</title>
    <link rel="stylesheet" href="./style/admin_page.css">
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

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Welcome ...! &nbsp &nbsp &nbsp &nbsp</strong> You have login to Admin panel. GoodLuck!!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="top-info">
                    <div class="right-info">
                        <a href="./admin_page.php">Home</a>/ <a href="./admin_page.php">Dashboard</a>
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
                

               
                    <div class="container ">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;">Total Users</h5>
                                <p class="card-text">
                                    <!-- using count(status) method  -->
                                    <?php
                                        $result = mysqli_query($conn, "SELECT COUNT(*) as count FROM users ");

                                        while($row = mysqli_fetch_array($result)){
                                            $value= $row['count'];
                                            echo  "<div style=' color: royalblue;
                                            font-size: 50px;
                                            font-weight: bold;
                                            padding: 10px; text-align:center;'>$value</div>";
                                        }
                                    ?>
                                </p>
                                <a href="./all_user.php" class="btn btn-primary">View</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"  style="text-align:center ;">Registered Students</h5>
                                <p class="card-text">
                                <?php
                                     $result = mysqli_query($conn,"SELECT COUNT(*) as status FROM users WHERE status='student'; ");
                                     while($row = mysqli_fetch_assoc($result)){
                                        $value= $row['status'];
                                        echo  "<div style=' color: royalblue;
                                        font-size: 50px;
                                        font-weight: bold;
                                        padding: 10px; text-align:center;'>$value</div>";
                                    }
                                    ?>
                                    </p>
                                <a href="./off-campus-student.php" class="btn btn-primary">View</a>
                            </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    <br><br>
                    <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"  style="text-align:center ;">Off-Campus Warden</h5>
                                <p class="card-text">
                                <?php
                                     $result = mysqli_query($conn,"SELECT COUNT(*) as status FROM users WHERE status='Warden'; ");
                                     while($row = mysqli_fetch_assoc($result)){
                                        $value= $row['status'];
                                        echo  "<div style=' color: royalblue;
                                        font-size: 50px;
                                        font-weight: bold;
                                        padding: 10px; text-align:center;'>$value</div>";
                                    }
                                    ?>
                                </p>
                                <a href="./warden.php" class="btn btn-primary">View</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center ;">Registered Admin</h5>
                                <p class="card-text">
                                    
                                <?php
                                     $result = mysqli_query($conn,"SELECT COUNT(*) as status FROM users WHERE status='Admin'; ");
                                     while($row = mysqli_fetch_assoc($result)){
                                        $value= $row['status'];
                                        echo  "<div style=' color: royalblue;
                                        font-size: 50px;
                                        font-weight: bold;
                                        padding: 10px; text-align:center;'>$value</div>";
                                    }
                                    ?>
                                </p>
                                <a href="./admin.php" class="btn btn-primary">View</a>
                            </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    <br><br>
                    <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;">Total Information</h5>
                                <p class="card-text">
                                    <!-- using count(status) method  -->
                                    <?php
                                        $result = mysqli_query($conn, "SELECT COUNT(*) as count FROM info ");

                                        while($row = mysqli_fetch_array($result)){
                                            $value= $row['count'];
                                            echo  "<div style=' color: royalblue;
                                            font-size: 50px;
                                            font-weight: bold;
                                            padding: 10px; text-align:center;'>$value</div>";
                                        }
                                    ?>
                                </p>
                                <a href="./all_user_info.php" class="btn btn-primary">View</a>
                            </div>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"  style="text-align:center ;">Registered Off campus Details</h5>
                                <p class="card-text">
                                <?php
                                     $result = mysqli_query($conn,"SELECT COUNT(*) as caunt FROM offcampusform ");
                                     while($row = mysqli_fetch_assoc($result)){
                                        $value= $row['caunt'];
                                        echo  "<div style=' color: royalblue;
                                        font-size: 50px;
                                        font-weight: bold;
                                        padding: 10px; text-align:center;'>$value</div>";
                                    }
                                    ?>
                                    </p>
                                <a href="./off-campus-details.php" class="btn btn-primary">View</a>
                            </div>
                            </div>
                        </div>
                    
                    </div>
                    <br><br>



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

<?php
session_start();

include_once '../database.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student information Page</title>
    <link rel="stylesheet" href="../admin/style/admin_page.css">
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
                   
                <a href="./student.php" class="link-a"><div class="link">Dashboard</div></a>
                <a href="./off-campus-form.php" class="link-a"><div class="link">Off Campus Form</div></a>
                <!-- <a href="" class="link-a"><div class="link">Student information</div></a> -->
                   
                </div>
                <div class="right-wrapper">

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Welcome ...! &nbsp &nbsp &nbsp &nbsp</strong> You have login as student. GoodLuck!!
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

            
            <?php
                include_once '../database.php';

                $sql ="SELECT * FROM offcampusform ";
                $result = mysqli_query($conn, $sql);
            ?>
               <?php if($result->num_rows == $_SESSION['regno']) :?>
                  <?php  while($row=mysqli_fetch_row($result)): ?>
                    
                    <div class="card">
                    <div class="card-header">
                        <img src="../../assets/image/newicon.gif" width="50px" height="50px" alt="">
                        <?php echo $row[1]; ?>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p style="text-align: left !important;"><?php echo $row[3]; ?></p>
                        <footer class="blockquote-footer" style="text-align: left !important;"><?php echo $row [2]; ?></footer>
                        </blockquote>
                    </div>
                    </div>
                    <br>
                 <?php endwhile; ?>
                <?php endif; ?>
        
            
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
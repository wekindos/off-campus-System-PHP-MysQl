
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
    <link rel="stylesheet" href="../admin/style/admin_page.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

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
                   
                <a href="./warden_page.php" class="link-a"><div class="link">Dashboard</div></a>
                   <a href="./off-campus-student.php" class="link-a"><div class="link">Off-Campus Student</div></a>
                   <a href="./upload-info.php" class="link-a"><div class="link">Update News</div></a>
                   
                </div>
                <div class="right-wrapper">
                <br><div class="top-info">
                    <div class="right-info">
                        <a href="./admin_page.php">Home</a>/ <a href="./all_user.php">all_user_info
                        </a>
                    </div>
                    <div class="user-info">
                        <div class="img">
                            <img src="../../assets/image/avatar.png" width="40" height="40" alt="User image">
                            <div class="name"> <?php if($_SESSION['regno']){
                                        echo ' ';
                                        echo $_SESSION['regno'];
                                    }else{
                                        header('location: ../index.php');
                                    }
                               ?></div>
                        </div>
                        <div class="logout">
                        <a href="../logout.php">Logout</a>
                        </div>
                    </div>


                </div>

                <div class="container">
        <div class="col-md-12">
            <div class="float-left">
                <h2>Announciments</h2>

            </div>

            <div class="float-right">
                <a href="./upload-info.php" class="btn btn-success">Add New Info</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID:</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">announcement</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once '../database.php';
                        $query ="SELECT * FROM info";
                        $result = mysqli_query($conn, $query);
                    ?>

                    <?php if($result->num_rows>0):?>
                        <?php while($row= mysqli_fetch_row($result)): ?>

                            <tr>
                                <td><?php echo $row[0];?></td>
                                <td><?php echo $row[1];?></td>
                                <td><?php echo $row[2];?></td>
                                <td><?php echo $row[3];?></td>
                                <td> 
                                <a href="edit_user_info.php?id=<?php echo $row[0];?>" class="btn btn-primary">Edit</a>
                                <a href="delete_user_info.php?id=<?php echo $row[0];?>" class="btn btn-danger">Delete</a>
                            </tr>
                            
                            <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>

                </tbody>
            </table>
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
    
    <!-- bootstrap  scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
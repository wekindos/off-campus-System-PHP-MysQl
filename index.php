
<?php
include_once './includes/database.php';
// $error = '<div class="error" style="padding: 10px;
// background-color: rgb(253, 173, 159);
// color: rgb(248, 50, 50);font-size: 20px;
// margin-top: 2px;
//     text-align: center;" > Incorect username or Password Combination</div>';

session_start();

if(isset($_POST['submit']))

{

    $regno=$_POST['regno'];
    $password=$_POST['password'];
    $fname=$_POST['fname'];

    $sql="SELECT * FROM users WHERE regno='".$regno."' AND password='".$password."' ";

    $result=mysqli_query($conn, $sql);

    $row=mysqli_fetch_array($result);
    
    
    if($row["status"]== 'Admin'){

        $_SESSION["success"] = '<div class="container" <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div></div>"';
        $_SESSION['regno']=$row['regno'];
        header('location: ./includes/admin/admin_page.php');
    }
    else if($row["status"]== 'Student'){
        $_SESSION['regno']=$regno;
        header('location: ./includes/student/student.php');
    }
    else if($row["status"]== 'Warden'){
        $_SESSION['regno']=$regno;
        header('location: ./includes/warden/warden_page.php');
    }
    else{
        echo '<script>
        alert ("Incorect Username and Password Combination:");
        </script>';
        // header("location: ./index.php"); //send user back to the login page.
    }
    // }else{
    //    $errors= '<div class="error"> Incorrect username and password combination</div>';
    // }

}
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Off-Campus System</title>
    <link rel="stylesheet" href="./style/css/form.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="./assets/image/logo.jpg" alt="must logo" width="200px" height="100" >
            </div>
            <div class="comp-name">
                <h1>MBEYA UNIVERSITY OF SCIENCE AND TECHNOLOGY</h1>
                <h3>OFF-CAMPUS ONLINE SYSTEM</h3>
            </div>
        </div>

        <div class="wrap-year-date">
            <div class="academic-year">
                <?php $lyear = date('Y',strtotime("-1 year"));
                echo 'Academic Year ';
                echo $lyear;
                echo " / ";
                $year = date('Y');
                echo $year;
                ?>
            </div>
            <div class="current-date">
                <?php 
                $date = date('M,D,Y');
                echo $date; 
                ?>
            </div>
        </div>


        <div class="wrapper">
            <div class="wrap-left-content">
               <h3>Welcome to Off-Campus</h3>
               <ul>
                   <li>
                   The Student Off-Compas Management System holds all the information relating to students.
                   </li>
               </ul>
               <h3>Students</h3>
               <p>
                   <ul>
                       <li>task one</li>
                   </ul>
               </p>
               <h3>Teaching Staff</h3>
               <p>
                   <ul>
                       <li>task one</li>
                   </ul>
               </p>
               <h3>Other</h3>
               <p>
                   <ul>
                       <li>task one</li>
                   </ul>
               </p>
            </div>

            <div class="wrap-right-content">
                <div class="form">
                    <form action="" method="POST">
                        <div class="form-head">
                            <h2>Login</h2>
                            <hr>
                        </div>
                        <?php
                    // if(isset($_SESSION["error"])){
                    //     $error = $_SESSION["error"];
                    //     echo "<span>$error</span>";
                    // }
                ?>  

                        <div class="form-field">
                            <div class="input-field">
                                <input type="hidden" name="fname" placeholder="Username" >
                            <?php  ?>
                            </div>
                            <div class="input-field">
                                <label for="name">Username</label>
                                <input type="text" name="regno" placeholder="Username" required>
                            <?php  ?>
                            </div>

                            <div class="input-field">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>

                            <div class="forget-pass">
                                <a href="./forget.php">Forgot yor password?</a>
                                

                                <div class="tooltip">
                                <a href="" class="help">HELP  </a>

                                    <span class="tooltiptext">
                                        no anything here.
                                </span>
                                </div>
                            </div>

                            <div class="btn-field">
                                <input type="submit" value="Login" name="submit">
                            </div>
                        </div>
                    </form>
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
</body>
</html>
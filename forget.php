
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
                    <form action="">
                        <div class="form-head">
                            <h2>FORGOT PASSWORD</h2>
                            <hr>
                        </div>

                        <div class="form-field">

                        <p>Please enter your username so we can send you an email to reset your password.</p>
                            <div class="input-field">
                                <label for="name">Username</label>
                                <input type="text" name="username" placeholder="Username">
                            </div>
                            <div class="forget-pass">
                                <a href="./index.php">Back to Login</a>
                                

                                <div class="tooltip">
                                <a href="" class="help">HELP  </a>

                                    <span class="tooltiptext">
                                        no anything here.
                                </span>
                                </div>
                            </div>

                            <div class="btn-field">
                                <input type="submit" value="Reset" name="submit">
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
            Designed and Developed by : ourGroup
            </div>
        </div>



    </div>
</body>
</html>
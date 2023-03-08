



<?php
session_start();

include_once '../database.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
    <link rel="stylesheet" href="../admin/style/admin_page.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .btn-upload{
            float: right;
            position: absolute;
            right: 90px;
            margin-top: 70px;


        }
    </style>
</head>

<body>


<div class="yote">
    
<div class="header">
            <div class="logo">
                <img src="../../assets/image/logo.jpg" alt="must logo" width="200px" height="100" >
            </div>
            <div class="comp-name">
                <h1>MBEYA UNIVERSITY OF SCIENCE AND TECHNOLOGY</h1>
                <h3>OFFCAMPUS ONLINE SYSTEM</h3>
            </div>
        </div>
        
    
  
        <div class="container-wrapper">
            <div class="wrapper-cont">
                <div class="left-wrapper">
                   
                <a href="./student.php" class="link-a"><div class="link">Dashboard</div></a>
                <a href="./off-campus-form.php" class="link-a"><div class="link">Off Campus Form</div></a>
                <!-- <a href="" class="link-a"><div class="link">Update News</div></a> -->
                   
                </div>
                <div class="right-wrapper">

                <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Welcome ...! &nbsp &nbsp &nbsp &nbsp</strong> You have login as student. GoodLuck!!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div> -->
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

                <div class="container">
                <form method="POST" action="./file_upload.php">
                    <h2 style="text-align: center;">TAARIFA BINAFSI</h2>
                    <div class="form-row">
                        <div class="col-4">
                        <input type="text" name="sfname" class="form-control" placeholder="Jina La Kwanza" required>
                        </div>
                        <div class="col">
                        <input type="text" name="slname" class="form-control" placeholder="Jina La Mwisho" required>
                        </div>
                        <div class="col">
                        <input type="text" name="sregno" class="form-control" placeholder="Namba Ya Usajili" required>
                        </div>
                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col-6">
                        <input type="email" name="semail" class="form-control" placeholder="Email Adress" required>
                        </div>
                        <div class="col">
                        <input type="text" name="sphone" class="form-control" placeholder="Namba Ya Simu" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-6">
                        <input type="text" name="sbirth" class="form-control" placeholder="Mwaka Wa Kuzaliwa" required>
                        </div>
                        <div class="col">
                        <input type="text" name="splace" class="form-control" placeholder="Mahali Ulipozaliwa" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-4">
                        <input type="text" name="syear" class="form-control" placeholder="Mwaka Wa Masomo" required>
                        </div>
                        <div class="col">
                        <input type="text" name="scourse" class="form-control" placeholder="Kozi" required>
                        </div>
                        <div class="col">
                        <input type="text" name="sdep" class="form-control" placeholder="Idara" required>
                        </div>
                    </div>
                    <br>
                    <h2 style="text-align:center ;">TAARIFA ZA MZAZI/MLEZI</h2>
                    <div class="form-row">
                        <div class="col-6">
                        <input type="text" name="pname" class="form-control" placeholder="Jina La Mzazi/Mlezi" required>
                        </div>
                        <div class="col">
                        <input type="text" name="pphone" class="form-control" placeholder="Namba Ya Simu" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-6">
                        <input type="text" name="pkname" class="form-control" placeholder="Ndugu Wa Karibu" required>
                        </div>
                        
                        <div class="col">
                        <input type="text" name="pkphone" class="form-control" placeholder="Namba ya Simu" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                        <input type="text" name="pmkoa" class="form-control" placeholder="Mkoa" required>
                        </div>
                        
                        <div class="col">
                        <input type="text" name="pwilaya" class="form-control" placeholder="Wilaya" required>
                        </div>
                        <div class="col">
                        <input type="text" name="pkata" class="form-control" placeholder="Kata" required>
                        </div>
                        <div class="col">
                        <input type="text" name="pmtaa" class="form-control" placeholder="Mtaa/Kijiji" required>
                        </div>
                    </div>

                    <h2 style="text-align:center ;">TAARIFA ZA MALAZI NJEE YA CHUO</h2>
                    <div class="form-row">
                        <div class="col-6">
                        <input type="text" name="mmiliki" class="form-control" placeholder="Jina La Mmiliki Wa Nyumba" required>
                        </div>
                        <div class="col">
                        <input type="text" name="mphone" class="form-control" placeholder="Namba Ya Simu" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-6">
                        <input type="text" name="mnyumba" class="form-control" placeholder="Namba Ya Nyumba" required>
                        </div>
                        
                        <div class="col">
                        <input type="text" name="mmtaa" class="form-control" placeholder="Mtaa/Kijiji" required>
                        </div>
                        
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                 </form>
                </div>
                
            </div></div>
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


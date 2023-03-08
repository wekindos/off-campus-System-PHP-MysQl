<?php

include_once '../database.php';

if(isset($_POST['submit'])){
    // student info
    $sfname =$_POST['sfname'];
    $slname =$_POST['slname'];
    $sregno =$_POST['sregno'];
    $semail =$_POST['semail'];
    $sphone =$_POST['sphone'];
    $sbirth =$_POST['sbirth'];
    $splace =$_POST['splace'];
    $syear =$_POST['syear'];
    $scourse =$_POST['scourse'];
    $sdep =$_POST['sdep'];
    // parent info
    $pname =$_POST['pname'];
    $pphone =$_POST['pphone'];
    $pkname =$_POST['pkname'];
    $pkphone =$_POST['pkphone'];
    $pmkoa =$_POST['pmkoa'];
    $pwilaya =$_POST['pwilaya'];
    $pkata =$_POST['pkata'];
    $pmtaa =$_POST['pmtaa'];
    // father house
    $mmiliki =$_POST['mmiliki'];
    $mphone =$_POST['mphone'];
    $mnyumba =$_POST['mnyumba'];
    $mmtaa =$_POST['mmtaa'];

    // insert all the information to database

    $sql ="INSERT INTO offcampusform (sfname,slname,sregno,semail,sphone,sbirth,splace,syear,scourse,sdep,pname,pphone, pkname,pkphone,pmkoa,pwilaya,pkata,pmtaa,mmiliki,mphone,mnyumba,mmtaa) VALUES ('$sfname','$slname','$sregno', '$semail','$sphone','$sbirth','$splace','$syear','$scourse','$sdep','$pname','$pphone','$pkname','$pkphone','$pmkoa','$pwilaya','$pkata','$pmtaa','$mmiliki','$mphone','$mnyumba','$mmtaa' )";
    mysqli_query($conn,$sql) ;
    echo ' <script>
    alert("Successfull Submited To Database")
    </script>';
    header('location: ./index.php');
      $conn->close();
}

?>
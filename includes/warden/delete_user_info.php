<?php
include_once '../database.php';

$query ="DELETE FROM info WHERE id='".$_GET["id"]."'";
mysqli_query($conn,$query);
header('location: ./warden_page.php');
$conn->close();

?>
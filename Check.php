<?php
$m1 = $_POST['E-mail'];
$m2 = $_POST['Password'];

$localhost = "localhost:3307";
$username = "root";
$pass = "";
$dbname = "robot_arm";
$conn = new mysqli($localhost,$username,$pass,$dbname);

if($conn->connect_error){
    die (" Connection  is field:".$conn->connect_error);
}
else{
    $s = "select * from registration where Email = '$m1' && Passwordd = '$m2'";
    $result = mysqli_query($conn,$s);
    $num = mysqli_num_rows($result);
    if($num == 1){
        header('location:interfacee.html');
    }
    else{
        echo " wrong input";
    
}
}
$conn->close();

?>
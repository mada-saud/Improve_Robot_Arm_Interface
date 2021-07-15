<?php
$m1 = $_POST['Name'];
$m2 = $_POST['phone-number'];
$m3 = $_POST['E-mail'];
$m4 = $_POST['Password'];

$localhost = "localhost:3307";
$username = "root";
$pass = "";
$dbname = "robot_arm";
$conn = new mysqli($localhost,$username,$pass,$dbname);
if($conn->connect_error){
    die (" Connection  is field:".$conn->connect_error);
}
else{
    $s = "select * from registration where Phone = '$m2' || Email = '$m3'";
    $result = mysqli_query($conn,$s);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "Check Please Phone Or Email Is Already Existing";
    }
    else{
        $reg ="insert into registration (Namee,Phone,Email,Passwordd) values ('$m1','$m2','$m3','$m4')";
        mysqli_query($conn,$reg);
        header('location:interfacee.html');}
}
$conn->close();
?>
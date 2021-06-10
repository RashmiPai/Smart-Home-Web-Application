<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="0.5; url=http://webocreate.000webhostapp.com/smarthome.html">
    <title>Smart Home</title>
</head>
<body>
    <center><h1>LED state chnged successfully</h1></center>
</body>
</html>
<?php
$servername = "localhost";
$username = "id14558477_controller";
$password = "eWTOVAJ62[x6iT8Y";
$dbname = "id14558477_tempdata";

//creating connection 
$con = new mysqli($servername,$username,$password,$dbname);

//checking connection
if($con->connect_error) {
    die("Connection failed".$con->connect_error);
}

if(isset($_GET['p1'])) {
    $p1 = $_GET['p1'];
    $sql = "UPDATE sensorData SET p1='$p1'";
    $result = $con->query($sql);
}
if(isset($_GET['p2'])) {
    $p2 = $_GET['p2'];
    $sql = "UPDATE sensorData SET p2='$p2'";
    $result = $con->query($sql);
}
if(isset($_GET['p3'])) {
    $p1 = $_GET['p3'];
    $sql = "UPDATE sensorData SET p3='$p3'";
    $result = $con->query($sql);
}
if(isset($_GET['p4'])) {
    $p1 = $_GET['p4'];
    $sql = "UPDATE sensorData SET p4='$p4'";
    $result = $con->query($sql);
}
if(isset($_GET['p5'])) {
    $p5 = $_GET['p5'];
    $sql = "UPDATE sensorData SET p5='$p5'";
    $result = $con->query($sql);
}
if(isset($_GET['p6'])) {
    $p6 = $_GET['p6'];
    $sql = "UPDATE sensorData SET p6='$p6'";
    $result = $con->query($sql);
}
?>
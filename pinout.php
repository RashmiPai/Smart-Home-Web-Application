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

$sql = "SELECT * FROM sensorData";
$result = $con->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "$row[p1]";
        echo "$row[p2]";
        echo "$row[p3]";
        echo "$row[p4]";
        echo "$row[p5]";
        echo "$row[p6] <br>";
        
        if("$row[p1]" == 1) {
            echo "LIGHT 1 = ON <br>";
        } else {
            echo "LIGHT 1 = OFF <br>";
        }
        if("$row[p2]" == 1) {
            echo "LIGHT 2 = ON <br>";
        } else {
            echo "LIGHT 2 = OFF <br>";
        }
        if("$row[p3]" == 1) {
            echo "LIGHT 3 = ON <br>";
        } else {
            echo "LIGHT 3 = OFF <br>";
        }
        if("$row[p4]" == 1) {
            echo "LIGHT 4 = ON <br>";
        } else {
            echo "LIGHT 4 = OFF <br>";
        }
        if("$row[p5]" == 1) {
            echo "LIGHT 5 = ON <br>";
        } else {
            echo "LIGHT 5 = OFF <br>";
        }
        if("$row[p6]" == 1) {
            echo "LIGHT 6 = ON <br>";
        } else {
            echo "LIGHT 6 = OFF <br>";
        }
    }
} else {
    echo "0 results";
}
?>
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

$sql = "SELECT * FROM tempData";
$result = $con->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo json_encode($row);
        echo "Temperature : $row[temp] <br>";
        echo "Humidity : $row[hum] <br>";
        echo "Water level : $row[wl] <br>";
    }
} else {
    echo "0 results";
}
?>
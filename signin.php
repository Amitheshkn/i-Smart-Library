<?php

 $FIRST_NAME =  $_POST ['FIRST_NAME'];
 $LAST_NAME = $_POST ['LAST_NAME'];
 $PH_NO =  $_POST ['PH_NO'];
 $EMAIL = $_POST ['EMAIL'];
 $ADDRESS = $_POST [ 'ADDRESS'];
 $PASS = $_POST [ 'PASS'];
 $REPASS = $_POST [ 'REPASS'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bike-service";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($PASS === $REPASS){
$sql = "INSERT INTO `register` (FIRST_NAME,LAST_NAME,PH_NO,EMAIL,ADDRESS,PASSWORD) VALUES ('$FIRST_NAME', '$LAST_NAME', '$PH_NO', '$EMAIL', '$ADDRESS','$PASS')";
if ($conn->query($sql) === TRUE) {
       echo"ACCOUNT SUCCESSFULLY CREATED !!";
		include("login.html");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	include("register.html");
}
}
else{
    echo "password doesnot match: ";
	include("register.html");
}

$conn->close();
?>





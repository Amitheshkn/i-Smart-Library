<?php

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

		$myusername=$_POST['myusername'];
        $mypassword=$_POST['mypassword'];
 if($myusername != NULL && $mypassword != NULL)
 {
	
   $sql="select * from admin where myusername = '$myusername' and mypassword= '$mypassword' ";
   $query=mysqli_query($conn,$sql) or die (mysqli_error($conn));
   
   $res=mysqli_fetch_row($query);
   if($res)
   {
	include("adminhome.html");
	
   }
   else
   {
    echo'You entered username or password is incorrect';
	include("admin.html");
   }
 }
 

?>

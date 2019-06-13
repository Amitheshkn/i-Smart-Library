<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ismartlibrary";

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
	
   $sql="select * from register where EMAIL = '$myusername' and PASSWORD= '$mypassword' ";
   $query=mysqli_query($conn,$sql) or die (mysqli_error($conn));
   
   $res=mysqli_fetch_row($query);
   if($res)
   {
	include("book_details.html");
	
   }
   else
   {
    echo'Entered username or password is incorrect!!';
	include("login.html");
   }
 }
 

?>

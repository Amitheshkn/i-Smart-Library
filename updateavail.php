<?php

 $book_named=$_POST['book_named'];
 $avail=$_POST['act1'];
 $e=$_POST['authors'];
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


$sql="UPDATE addbooks set Availability='$avail' where book_name='$book_named' or author='$e'" ;
if ($conn->query($sql) === TRUE) {
       echo"UPDATED SUCCESSFULLY";
		include("updateavail.html");

} else {
    echo "REQUESTED BOOK NOT FOUND: " . $sql . "<br>" . $conn->error;
	include("updateavail.html");
}



$conn->close();
?>





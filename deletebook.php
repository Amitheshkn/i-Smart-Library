<?php

 $booknamed=$_POST['booknamed'];
 $auth=$_POST['auth'];
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


$sql="DELETE FROM addbooks where book_name='$booknamed' and author='$auth'" ;
if ($conn->query($sql) === TRUE) {
       echo"DELETE SUCCESSFULL";
		include("deletebooks.html");

} else {
    echo "REQUESTED BOOK NOT FOUND: " . $sql . "<br>" . $conn->error;
	include("deletebooks.html");
}



$conn->close();
?>





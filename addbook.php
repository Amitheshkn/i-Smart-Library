<?php

 $book_name =  $_POST ['book_name'];
 $edition = $_POST ['edition'];
 $author =  $_POST ['author'];
 $genre = $_POST ['genre'];
 $section = $_POST [ 'section'];
 $column_name = $_POST [ 'column_name'];
 $row = $_POST [ 'row'];
 $a=$_POST['act'];



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


$sql = "INSERT INTO `addbooks` (book_name,edition,author,genre,section,column_name,row,Availability) VALUES ('$book_name', '$edition', '$author', '$genre', '$section','$column_name','$row','$a')";
if ($conn->query($sql) === TRUE) {
	echo"BOOK ADDED SUCCESSFULLY";
       
		include("addbook.html");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	include("addbook.html");
}



$conn->close();
?>





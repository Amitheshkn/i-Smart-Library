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

  
 $res=mysqli_query($conn,"select * from addbooks")or die (mysqli_error($conn));;
 ?>
 <html>
<head>
     <title>VIEW BOOKS</title>
	 <link rel="stylesheet" type="text/css" href="css/style15.css">
</head>
<body>
    <header>
	    <div class="">
		 
		   <div class="logo">
		         <a href="adminhome.html">  <img src="SMATY.jpg" align="right"></a>
		     </div>
			
        </div><br><br><br><br>
		 </div>
		 <head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
	background:rgba(255,255,255,0.5);
    width: 100%;
}

td, th {
    border: 1px solid #000000;
	border-width:2px;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #FFFFFF;
}
</style>
<table>
  <tr>
    <th>BOOK NAME</th>
    <th>EDITION</th>
    <th>AUTHOR</th>
    <th>GENRE</th>
    <th>SECTION</th>
    <th>COLUMN NUMBER</th>
    <th>ROW NUMBER</th>
	<th>AVAILABILITY</th>
   
   
  </tr>
  <?php while($viewc= mysqli_fetch_object($res)) {?>
 
   <tr>
    <th><?php echo $viewc->book_name ?></th>
    <th><?php echo $viewc->edition ?></th>
    <th><?php echo $viewc->author ?></th>
    <th><?php echo $viewc->genre ?></th>
    <th><?php echo $viewc->section ?></th>
    <th><?php echo $viewc->column_name ?></th>
    <th><?php echo $viewc->row ?></th>
    <th><?php echo $viewc->Availability ?></th>
    
   
    
  </tr>
  <?php } ?>
</table>   
  

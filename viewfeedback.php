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

 
 $res=mysqli_query($conn,"select * from feedback")or die (mysqli_error($conn));;
 ?>
 <html>
<head>
     <title>VIEW FEEDBACKS</title>
	 <link rel="stylesheet" type="text/css" href="css/style5.css">
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
    <th>FEEDBACKS RECEIVED</th>
  </tr>
  <?php while($bill= mysqli_fetch_object($res)) {?>
 
   <tr>
    <th><?php echo $bill->feedback ?></th>
    
  </tr>
  <?php } ?>
</table>   
  
 
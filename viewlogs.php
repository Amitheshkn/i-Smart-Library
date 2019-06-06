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

  
 $res=mysqli_query($conn,"select FIRST_NAME,LAST_NAME,PH_NO,EMAIL,ADDRESS from register ")or die (mysqli_error($conn));;
 ?>
 <html>
<head>
     <title>VIEW LOGINS</title>
	 <link rel="stylesheet" type="text/css" href="css/style12.css">
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
button{
   background:rgb(192,192,192,0.4);
   font-family:sans-serif;
	width:250px;
	height:40px;
    border-radius: 10%;
	border-background-color: rgb(0,0,0,1) ;
	position:absolute;
	top:90%;
	left:40%;
	
}
</style>
<table>
  <tr>
    <th>FIRST_NAME</th>
    <th>LAST_NAME</th>
    <th>PH_NO</th>
    <th>EMAIL</th>
    <th>ADDRESS</th>
       
  </tr>
  <?php while($viewc= mysqli_fetch_object($res)) {?>
 
   <tr>
    <th><?php echo $viewc->FIRST_NAME ?></th>
    <th><?php echo $viewc->LAST_NAME ?></th>
    <th><?php echo $viewc->PH_NO ?></th>
    <th><?php echo $viewc->EMAIL ?></th>
    <th><?php echo $viewc->ADDRESS ?></th>
    
    
  </tr>
  <?php } ?>
</table>   
  
  
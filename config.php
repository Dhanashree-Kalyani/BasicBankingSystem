<?php
//Connecting to Database
$servername="localhost";
$username="root";
$password="";
$database="bank2";


//Create a connection
$conn=mysqli_connect($servername,$username,$password,$database);

//Condition to check connection is successful or not
if (!$conn) {
	
	die("Connection Failed".mysqli_connect_error());
}


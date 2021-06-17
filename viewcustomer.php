<?php include("config.php")?>

<!DOCTYPE html>
<html>
<head>
	<title>View all customers</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style type="text/css">
    	table,td,th {
	       border: 2px black solid;
}
td,th
{
	padding-left: 6px;
	font-size: 20px;
	color: #000;
}
table {
	width: 100%;
	height: 40vh;
}

th {
	height: 40px;
}
h1
{
 color: #000;
 margin-left: 290px;
}
    </style>

</head>
<body style="background-color : #899cd3 ;"  >
<?php
include('header.html');
?>
<div class="container">
<h1>All Customers</h1>  
<div style="overflow-x:auto;">
<table id="customers" style="border-color:black;" style="border-radius: 2px;" >
        <thead  ><!--heading -->
            <tr ><!--for row-->
            <th  >Id</th>
                <th >Name</th><!--column in bold-->
                <th>Email Id</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody ><!--body of table-->
			
			<?php
$selectquery = "select * from users";
$query = mysqli_query($conn,$selectquery);



while($res = mysqli_fetch_array($query)){
	?>
	
	 <tr>
            <td data-th="id"><?php echo $res['id']; ?></td>
                <td data-th="Name"><?php echo $res['name']; ?></td><!--column not in bold-->
                <td data-th="Email"><?php echo $res['email']; ?></td>
                <td data-th="Balance"><?php echo $res['balance']; ?></td>
            </tr>
			<?php
				}

				?> 
							
			
           
           
        </tbody>
       
</table>
</div>
</div>
<footer class="text-center mt-5 py-2">
            <p>&copy 2021.<b>PRIME BANK</b> 
        </footer>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
	</body>
</html>
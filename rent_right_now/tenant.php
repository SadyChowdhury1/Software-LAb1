<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<form action="tenant.php" method="post"> 
<center><h1>Rent Right Now!</h1> <br>
<h3>Register</h3><br></center>
<label>Name:</label><input type="text" name="name"><br><br>	
<label>Password:</label><input type="password" name="pw"><br><br>	
<label>NID:</label><input type="text" name="nid"><br><br>	
<label>Contuct Number:</label><input type="text" name="contact_no"><br><br>	
<button type="submit" name="submit">Submit</button>	
<p>If you already have account </p>
<a href="tanant_login.php">Login</a>
</form>
</body>
</html>

<?php 

$server="localhost";
$username="root";
$password="";
$dbname="rent_right_now";


$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){

	if(!empty($_POST['name']) && !empty($_POST['pw']) && !empty($_POST['nid'])&& !empty($_POST['contact_no'])){

		$name=$_POST['name'];
		$pw=$_POST['pw'];
		$nid=$_POST['nid'];
		$contact_no=$_POST['contact_no'];
		

		$query="insert into tenant(name,pw,nid,contact_no) values('$name','$pw','$nid','$contact_no')";

		$run=mysqli_query($conn,$query) or die(mysqli_error($conn));
		if($run){
			echo "Data submitted";
			header('Location: tanant_login.php');
		}

	}
else{
	header('Location: error1.php');
}
}
 ?>



				
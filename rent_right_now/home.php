<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<form action="home.php" method="post"> 
		<center><h1>Rent Right Now</h1> <br>
<h3>Register</h3><br></center>

<label>Name:</label><input type="text" name="name"><br><br>	
<label>Password:</label><input type="password" name="pw"><br><br>	
<label>Contact Number:</label><input type="text" name="contact_no"><br><br>	
<button type="submit" name="submit">Submit</button>	
<p>If you already have account </p>
<a href="owner_login.php">Login</a>
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

	if(!empty($_POST['name']) && !empty($_POST['pw']) && !empty($_POST['contact_no'])){

		$name=$_POST['name'];
		$pw=$_POST['pw'];
		$contact_no=$_POST['contact_no'];
		

		$query="insert into house_owner(name,pw,contact_no) values('$name','$pw','$contact_no')";

		$run=mysqli_query($conn,$query) or die(mysqli_error($conn));
		if($run){
			
			header('Location: owner_login.php');
		}

	}
else{
	header('Location: error1.php');
}
}
 ?>



				
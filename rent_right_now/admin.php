<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body>
	<form action="admin.php" method="post"> 

<label>Name:</label><input type="text" name="name"><br><br>	
<label>Password:</label><input type="password" name="pw"><br><br>	
<button type="submit" name="submit">Submit</button>	
<p>If you already have account </p>
<a href="admin_login.php">Login</a>
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

	if(!empty($_POST['name']) && !empty($_POST['pw'])){

		$name=$_POST['name'];
		$pw=$_POST['pw'];
		
		

		$query="insert into admin(name,pw) values('$name','$pw')";

		$run=mysqli_query($conn,$query) or die(mysqli_error($conn));
		if($run){
			echo "Data submitted";
		}

	}
else{
	echo "all fields required";
}
}
 ?>



				
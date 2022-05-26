
<?php 

$server="localhost";
$username="root";
$password="";
$dbname="rent_right_now";


$conn = mysqli_connect($server,$username,$password,$dbname);



if(isset($_POST['name']) && isset($_POST['pw'])){

 $name=$_POST['name'];
$pw= $_POST['pw'];

if(!empty($name) && !empty($pw)){
	$sql = "SELECT name,pw FROM house_owner WHERE name='$name' AND pw='$pw'";
	$sql_query= mysqli_query($conn,$sql);

	$mysqli_num_rows = mysqli_num_rows($sql_query);

	if($mysqli_num_rows){

		echo 'login succesfull';
		

	}
	else{

		echo 'invalid user name';



	}


}
else{
echo 'Fill up all boxes';
}




}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="login.php" method="post">
		User Name:<input type="text" name="name"><br><br>
		Password: <input type="Password" name="pw"><br><br>
		<input type="submit" value="Login">


		



	</form>

</body>
</html>


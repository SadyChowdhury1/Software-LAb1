<?php 

$server="localhost";
$username="root";
$password="";
$dbname="rent_right_now";


$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){

	if(!empty($_POST['location']) && !empty($_POST['room']) && !empty($_POST['kitchen']) && !empty($_POST['toilet']) && !empty($_POST['balcony']) && !empty($_POST['area']) && !empty($_POST['floor']) && !empty($_POST['lift']) && !empty($_POST['genarator']) && !empty($_POST['drawing_dining']) && !empty($_POST['electric_bill']) && !empty($_POST['water_bill']) && !empty($_POST['gas_bill']) && !empty($_POST['bill_pay_system']) && !empty($_POST['bill_pay_system'])){

		$location=$_POST['location'];
		$room=$_POST['room'];
		$kitchen=$_POST['kitchen'];
		$toilet=$_POST['toilet'];
		$balcony=$_POST['balcony'];
		$area=$_POST['area'];
		$floor=$_POST['floor'];
		$lift=$_POST['lift'];
		$genarator=$_POST['genarator'];
		$drawing_dining=$_POST['drawing_dining'];
		$electric_bill=$_POST['electric_bill'];
		$water_bill=$_POST['water_bill'];
		$gas_bill=$_POST['gas_bill'];
		$bill_pay_system=$_POST['bill_pay_system'];
		$contact=$_POST['contact'];
		$date1=$_POST['date1'];
		$rent=$_POST['rent'];




		$query="INSERT into house(location,room,kitchen,toilet,balcony,area,floor,lift,genarator,drawing_dining,electric_bill,water_bill,gas_bill,bill_pay_system,contact,date1,rent) values('$location','$room','$kitchen','$toilet','$balcony','$area','$floor','$lift','$genarator','$drawing_dining','$electric_bill','$water_bill','$gas_bill','$bill_pay_system','$contact','$date1','$rent')";

		$run=mysqli_query($conn,$query) or die(mysqli_error($conn));
		if($run){
			
			 header('Location: submission.php');
			 
		
		}

	}
else{
	header('Location: error.php');
	// echo "all fields required";
	 // header('Location: createHouse.php');
	 
	// header('Location: createHouse.php');
	// echo "all fields required";
}
	

		

}





 ?>
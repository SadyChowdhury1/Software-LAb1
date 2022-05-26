<!DOCTYPE html>
<html>
<head>
	<title>Add House</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	
	<form action="insertHouse.php" method="post"> 

		<center>
			<h1>Rent Right Now!</h1>
			<h3>Give your house info</h3>
		</center>
		
<label>Rent:</label><input type="text" name="rent" placeholder="10000"><br>
<label>Location:</label><input type="text" name="location" placeholder="Address/area/road/block"><br>	

<label>Room:</label><input type="text" name="room" placeholder="1"><br>

<label>Kitchen:</label><input type="text" name="kitchen" placeholder="1"><br>	

<label>Toilet:</label><input type="text" name="toilet" placeholder="1"><br>	

<label>Balcony:</label><input type="text" name="balcony" placeholder="1"><br>

<label>Area:</label><input type="text" name="area" placeholder="Squre Feet"><br>

<label>Floor:</label><input type="text" name="floor" placeholder="1st"><br>




<label>Elevator:</label><input type="text" name="lift" placeholder="Yes/No"><br>


<label>Genarator:</label><input type="text" name="genarator" placeholder="Yes/No"><br>

<label>Drawing and Dining Space:</label><input type="text" name="drawing_dining"
placeholder="Yes/No"><br>

<label>Electric Bill:</label><input type="text" name="electric_bill" placeholder="Yes/No"><br>

<label>Water Bill:</label><input type="text" name="water_bill" placeholder="Yes/No"><br>

<label>Gas Bill:</label><input type="text" name="gas_bill" placeholder="Yes/No"><br>

<label>Bill Payment System:</label><input type="text" name="bill_pay_system" placeholder="Card/Not card"><br>

<label>Contact Number:</label><input type="text" name="contact" placeholder="Contact No."><br>
 <label>Date:</label><input type="text" name="date1" placeholder="dd-mm-yyyy"><br>



<a href="index.php">Logout</a> 








<button type="submit" name="submit">Submit</button>	
</form>
</body>
</html>

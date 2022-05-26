
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Search House</title>

	 



<style >
	body{
	background-color: rgb(34,187,233);
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
}


</style>





</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
          <?php
          $connection  = mysqli_connect('localhost','root','','rent_right_now');


          if(isset($_POST['search'])){
            $searchKey = $_POST['search'];
            $sql ="SELECT house_id,location,room,date1,rent FROM house WHERE location LIKE '%$searchKey%'";
          }

          else
          $sql ="SELECT house_id,location,room,date1,rent FROM house";
          $result = mysqli_query($connection,$sql);
          ?>

				<form action="" method="POST">
					<center><h1>Rent Right Now!</h1><br>
						<h3>Search</h3><br><br><br>
					</center>
					
					
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Location" value="" >
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>ID</th>
						<th>Location</th>
						<th>Room</th>
						<th>Date</th>
						<th>Rent</th>
						<th>Details</th>
                        
					</tr>

           <?php while($row = mysqli_fetch_object($result)){  ?>
					<tr>
						<td><?php echo $row->house_id  ?></td>
            <td><?php echo $row->location ?></td>
            <td><?php echo $row->room ?></td>
            <td><?php echo $row->date1 ?></td>
            <td><?php echo $row->rent ?></td>

            <td><a href="houseDetails.php">Details</a></td>
            <!-- <td><?php echo $row->homemaderestaurant_name ?></td> -->
          </tr>

        <?php  } ?>


					</tr>

				</table>
<a href="index.php"; style="color:black">Logout</a> 
			</div>
		</div>
	</div>
</body>


   




</html>

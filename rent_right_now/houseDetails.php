<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">


<style >
    body{
    background-color: rgb(34,187,233);
}
   
</style>
</head>
<body><center><h1>Rent Right Now!</h1></center>
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                    
                        <h4>Search House Details By House ID</h4>
                    
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="house_id" value="<?php if(isset($_GET['house_id'])){echo $_GET['house_id'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                                
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","rent_right_now");

                                    if(isset($_GET['house_id']))
                                    {
                                        $house_id = $_GET['house_id'];

                                        $query = "SELECT * FROM house WHERE house_id='$house_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">House ID</label>
                                                    <input type="text" value="<?= $row['house_id']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Location</label>
                                                    <input type="text" value="<?= $row['location']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Contact No</label>
                                                    <input type="text" value="<?= $row['contact']; ?>" class="form-control">
                                                </div>

                                                 <div class="form-group mb-3">
                                                    <label for="">Room</label>
                                                    <input type="text" value="<?= $row['room']; ?>" class="form-control">
                                                </div>
                                                 <div class="form-group mb-3">
                                                    <label for="">Kitchen</label>
                                                    <input type="text" value="<?= $row['kitchen']; ?>" class="form-control">
                                                </div>
                                                 <div class="form-group mb-3">
                                                    <label for="">Toilet</label>
                                                    <input type="text" value="<?= $row['toilet']; ?>" class="form-control">
                                                </div>

                                                 <div class="form-group mb-3">
                                                    <label for="">Balcony</label>
                                                    <input type="text" value="<?= $row['balcony']; ?>" class="form-control">
                                                </div>
                                                 <div class="form-group mb-3">
                                                    <label for="">Area</label>
                                                    <input type="text" value="<?= $row['area']; ?>" class="form-control">
                                                </div>
                                                 <div class="form-group mb-3">
                                                    <label for="">Floor</label>
                                                    <input type="text" value="<?= $row['floor']; ?>" class="form-control">
                                                </div>
                                                 <div class="form-group mb-3">
                                                    <label for="">Elevator</label>
                                                    <input type="text" value="<?= $row['lift']; ?>" class="form-control">
                                                </div>
                                                 <div class="form-group mb-3">
                                                    <label for="">Generator</label>
                                                    <input type="text" value="<?= $row['genarator']; ?>" class="form-control">
                                                </div>
                                                 <div class="form-group mb-3">
                                                    <label for="">Dawing and Dining Space</label>
                                                    <input type="text" value="<?= $row['drawing_dining']; ?>" class="form-control">
                                                </div>
                                                 <div class="form-group mb-3">
                                                    <label for="">Electric Bill</label>
                                                    <input type="text" value="<?= $row['electric_bill']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Water Bill</label>
                                                    <input type="text" value="<?= $row['water_bill']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Gas Bill</label>
                                                    <input type="text" value="<?= $row['gas_bill']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Bill Payment System</label>
                                                    <input type="text" value="<?= $row['bill_pay_system']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Rent</label>
                                                    <input type="text" value="<?= $row['rent']; ?>" class="form-control">
                                                </div>
                                                <a href="index.php">Logout</a>
                                                 










                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
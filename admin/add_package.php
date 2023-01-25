<?php
 require('inc/essentials.php');
 adminLogin();
?>

<?php require('database.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="css/add_package.css" />
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>
    <div class="container-fluid" id="main-content">
            <div class="row">
                <div class="col-lg-10 ms-auto p-4 overflow-hidden">

<?php
if(@$_GET['step']== '1') 
    {
        ?>

             <form action="update.php?q=4" method="POST" enctype="multipart/form-data">       
          <div class="col-50">
            <h3>Add Package (Step-1)</h3>
            <label for="fname"><i class="fa fa-user"></i> Package Name</label>
            <input type="text" id="fname" name="pname" placeholder="Tree Properties in Goa">
            <label for="fname"><i class="fa fa-user"></i> Display Image</label>
            <input type="file" name="uploadfile" accept="image/x-png,image/gif,image/jpeg,image/jpg"/>
            <label for="email"><i class="fa fa-envelope"></i> Country</label>
            <input type="text" id="email" name="country" placeholder="Nepal">
            <label for="adr"><i class="fa fa-address-card-o"></i> State</label>
            <input type="text" id="adr" name="state" placeholder="Delhi">
            <label for="city"><i class="fa fa-institution"></i> duration</label>
            <input type="text" id="city" name="duration" placeholder="5">  
            <label for="city"><i class="fa fa-institution"></i> Season</label>
            <input type="text" id="city" name="season" placeholder="summer, winter">
              
            <label for="city"><i class="fa fa-institution"></i> Expired Package</label>
            <input type="date" id="city" name="p_expired" placeholder="summer, winter">
			</div>
            <input type="submit" value="Continue to checkout" class="btn3">
</form>
<?php
                
    }
    ?> 
    
    

    <?php
if(@$_GET['step']== '2') 
    {
        ?>

        <form action="update.php?q=5" method="POST" enctype="multipart/form-data">       
          <div class="col-50">
            <h3>Add Package Details (Step - 2)</h3>



<?php
$pid = $_GET['pid'];
$query = "select * from package Where package_id = '$pid'";
$data = mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
$tduration = $result['duration'];
$i = 1;

    ?> 
    <h3>Total 0<?php echo $tduration; ?> Days Plan</h3>
    <label for="fname"><i class="fa fa-user">Days 0<?php echo $i; ?></i> </label>
    
    <label for="fname"><i class="fa fa-user"></i> Jounry Start</label>
    <input type="text" id="email" name="country" placeholder="Nepal">
    <label for="email"><i class="fa fa-envelope"></i> Destination</label>
    <input type="text" id="email" name="country" placeholder="Nepal">
    <label for="adr"><i class="fa fa-address-card-o"></i> Details</label>
    <input type="text" id="adr" name="state" placeholder="Delhi">
    <label for="city"><i class="fa fa-institution"></i>Travel Mode</label>
    <input type="text" id="city" name="duration" placeholder="5">  
    
    <input type="submit" value="Continue to Step 3" class="btn3">
</form>
<?php
$i++;










                
    }
    ?>
                
                
                
                
                
                
                
                
                </div>
            </div>
    </div>

  <?php require('inc/scripts.php'); ?>
</body>
</html>
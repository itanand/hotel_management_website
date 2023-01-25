<?php
 require('inc/essentials.php');
 adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="css/package.css" />
    <?php require('database.php') ?>
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>
    <div class="container-fluid" id="main-content">
            <div class="row">
                <div class="col-lg-10 ms-auto p-4 overflow-hidden">



                <div class="a233">
<div class="a234">
  <a href="" class="active6">All Package</a>
  <a href="">Option 2</a> 
</div>
<div class="a235">
<a href="add_package.php?step=1"> Add New </a>
</div>
</div>

<?php

$query = "select * from package";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$counter = 0;

while($result=mysqli_fetch_assoc($data))
    {
        ?> 

<div class="card">
    <div class="over"><a ><?php echo $result['status']; ?> </a></div>
  <img src="images/<?php echo $result['img_link']; ?>" alt="Denim Jeans" style="width:100%">
  <h3><?php echo $result['package_name']; ?></h3>
  <p class="price"><?php echo $result['country']; ?>, <?php echo $result['state']; ?></p>
  <p><?php echo $result['duration']; ?></p>
  
  <div class="row">
  <div class="column">    
    <a href="package_detail.php">Detail</a>
  </div>
  <div class="column2">   
    <a href="edit_package.php">Edit</a>
  </div>
</div>
</div>




        <?php       
    }
?>     
                    
                



































</div>
           </div>
    </div>

  <?php require('inc/scripts.php'); ?>
</body>
</html>







<div class="taskhead"> <h1>All Package </h1></div>
<div class="allp">
<?php

$query = "select * from package";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$counter = 0;

    while($result=mysqli_fetch_assoc($data))
    {
?>                
<div class="card overflow-hidden" style="width: 25%;display: inline-block;  float: none;height: 357px;margin: 11px;">
  <img src="admin/images/<?php echo $result['img_link']; ?>" class="card-img-top" alt="..." style="height: 160px;">
  <div class="card-body">
    <h5 class="card-title"><a href="package_detail.php?pid=<?php echo $result['package_id'];?>"><?php echo $result['package_name']; ?></a></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"><?php echo $result['duration']; ?></a>
  </div>
</div>
<?php       
    }
?>
</div>
</div>


<div class="taskhead"> <h1>Foreign Package </h1></div>
<div class="allp">
<?php

$query = "select * from package";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$counter = 0;

    while($result=mysqli_fetch_assoc($data))
    {
?>                
<div class="card overflow-hidden" style="width: 25%;display: inline-block;  float: none;height: 357px;">
  <img src="admin/images/<?php echo $result['img_link']; ?>" class="card-img-top" alt="..." style="height: 160px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['package_name']; ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"><?php echo $result['duration']; ?></a>
  </div>
</div>
<?php       
    }
?>
</div>
</div>



<div class="taskhead"> <h1>Winter Package </h1></div>
<div class="allp">
<?php

$query = "select * from package";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$counter = 0;

    while($result=mysqli_fetch_assoc($data))
    {
?>                
<div class="card overflow-hidden" style="width: 25%;display: inline-block;  float: none;height: 357px;">
  <img src="admin/images/<?php echo $result['img_link']; ?>" class="card-img-top" alt="..." style="height: 160px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['package_name']; ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"><?php echo $result['duration']; ?></a>
  </div>
</div>
<?php       
    }
?>
</div>
</div>



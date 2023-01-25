<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel  Booking Website</title>
    <?php require('include/links.php') ?>
    <?php require('database.php') ?>
    <link rel="stylesheet" href="css/package_detail.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <style>

         .custom-box-shadow{box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)}
;
          .availability-form{
             margin-top: -50px;
             z-index: 2;
             position: relative;
          }
          @media  screen and (max-width: 575px)  {
            .availability-form{
                margin-top: 25px;
                padding: 0 35px;
              }
          }
    </style>
  </head>
  <body class="bg-light">

     <?php
       require('include/header.php')
     ?>



<?php
$pid = $_GET['pid'];
$query = "select * from package WHERE package_id = '$pid'";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$counter = 0;

$result=mysqli_fetch_assoc($data)
?> 
   <br> 
<h2><?php echo $result['package_name']; ?></h2>
<br>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="<?php echo $result['img_link']; ?>" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="<?php echo $result['img_link']; ?>" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="<?php echo $result['img_link']; ?>" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="<?php echo $result['img_link']; ?>" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
 
    
    
    



<br>
<div class="allp">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">ITINERARY</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">POLICIES</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">SUMMARY</button>
</div>

<div id="London" class="tabcontent">
  
  <p>Where will your tour travel to? What are the main locations and highlights that visitors are going to experience?</p>
  <?php
$pid = $_GET['pid'];
$query = "select * from package_tour_detail WHERE package_id = '$pid'";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$counter = 0;

while($result=mysqli_fetch_assoc($data))
    {
        ?> 
        <div class="mainday">
        <div class="day"><a class="days">Day <?php echo $result['days']; ?></a><a> Start From <?php echo $result['start_from']; ?> To <?php echo $result['destination']; ?>, <?php echo $result['travel_mode']; ?></a>
    
    </div>
    <p>Note - <?php echo $result['detail']; ?>.</p>
    </div>
        <?php       
    }
?>     


</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</div>

        </body>
        </html>
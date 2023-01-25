<?php require('database.php') ?>
<?php


if(@$_GET['q']== '4') 
    {
      $pname = $_POST['pname'];
      
      $duration = $_POST['duration'];
      $country = $_POST['country'];
      $state = $_POST['state'];
      $season = $_POST['season'];
      $p_expired = $_POST['p_expired'];

      $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "images/".$filename;


     
       
      
      $myuid = uniqid('gfg', true);
      $q3=mysqli_query($con,"INSERT INTO package VALUES  (NULL,'$myuid','$pname' , '$filename', '$country' , '$state','$duration', '$season',NULL, '$p_expired','Incomplete')");
      // Now let's move the uploaded image into the folder: image
      if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
      header("location:add_package.php?step=2");
    }

?>
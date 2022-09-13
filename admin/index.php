<?php
require('inc/db_config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php
      require('inc/links.php');
    ?>
    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>
<body class="bg-light">

   <div class="login-form text-center rounded bg-white shadow overflow-hidden">
      <form action="" method="POST">
         <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                   <input name="admin_name"  required type="text" class="form-control shadow-none text-center" placeholder="Admin Name" >
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Admin Password" >
                </div>
                <button type="Submit" class="btn btn-danger text-white shadow-none" name="login">LOGIN</button>
            </div>
      </form>
   </div>

   <?php

     if(isset($_POST['login']))
     {
        $frm_data =  filteration($_POST);

        $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$frm_data['admin_name'],$frm_data['admin_pass']];  //value of arrays

        $res = select($query, $values, "ss");
        print_r($res);
     }
   ?>

<?php require('inc/scripts.php'); ?>
</body>
</html>
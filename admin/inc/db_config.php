<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "manglam_hotel";

//connection

$con = mysqli_connect("$host", "$username", "$password","$database");

// check Connection
if(!$con)
{
   die("Cannot connect to Database".mysqli_connect_error());
}

function filteration($data)
{
    foreach($data as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);     //html tag remove
    }
    return $data;
}

function select($sql, $values, $datatypes)
{
   $con = $GLOBALS['con'];
   if($stmt = mysqli_prepare($con,$sql))
   {
       mysqli_stmt_bind_param($stmt, $datatypes,...$values); //php splat operator
       if(mysqli_stmt_execute($stmt ))
       {
        $res = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        return $res;
       }
       else
       {
          mysqli_stmt_close($stmt);
          die("Query Can't be executed - Select");
       }

   }
   else
   {
    die("Query Can't be prepared - Select");
   }

}

function update($sql, $values, $datatypes)
{
   $con = $GLOBALS['con'];
   if($stmt = mysqli_prepare($con,$sql))
   {
       mysqli_stmt_bind_param($stmt, $datatypes,...$values); //php splat operator
       if(mysqli_stmt_execute($stmt ))
       {
        $res = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $res;
       }
       else
       {
          mysqli_stmt_close($stmt);
          die("Query Can't be executed - Ipdate");
       }

   }
   else
   {
    die("Query Can't be prepared - Update");
   }

}

?>
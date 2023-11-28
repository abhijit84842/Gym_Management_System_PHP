<!DOCTYPE html>
<html>
<body>
<script src="js/sweetalert.js"></script>


<?php

    require("connect.php");

    $fname=$_POST["fname"];

    $lname=$_POST["lname"];

    $ad=$_POST["add"];

    $gender=$_POST["gen"];

    $mail=$_POST["em"];

    $mob=$_POST["mobile"];


    $d=date("d");
    $m=date("m");
    $y=date("Y");
    $h=date("H");
    $min=date("i");
    $s=date("s");
    $uid="SA"."$d"."$m"."$y"."$h"."$min"."$s";
    //echo "Succesfuly registered" ."<br>";

    //echo "Your user id :- $uid" . "<br>";

    $name=$fname.$lname;

    //echo "Name is : $name" . "<br>";

    //echo "Address is : $ad" . "<br>";

    //echo "Gender is : $gender" . "<br>";

    //echo "Email id is $mail" ."<br>";

    //echo "Mobile number is $mob" . "<br>";

  


$wt="INSERT INTO addmanager VALUES('', '$uid', '$fname', '$lname', '$ad', '$gender' , '$mail', '$mob')";

    $c=$con;

    $rslt=$c->query($wt);

    if($rslt)
    {
        $_SESSION['status'] = "Data Registerd Successfully";
        $_SESSION['status_code'] = "success";
        header('Location: manager0.php');
    }

   

    else
    {
        $_SESSION['status'] = "Data Not Registerd";
        $_SESSION['status_code'] = "error";
        header('Location: manager0.php');
    }
        




?>

</body>
</html>
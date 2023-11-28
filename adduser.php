<?php
    require("connect.php");

    $fname=$_POST["fname"];

    $lname=$_POST["lname"];

    $ad=$_POST["add"];

    $gender=$_POST["gen"];

    $mail=$_POST["em"];

    $pass=$_POST["passwd"];

    $mob=$_POST["mobile"];

    $plan=$_POST["br"];

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

    //echo "Password is $pass" ."<br>";

    //echo "Mobile number is $mob" . "<br>";

    //echo "Plan Subscription is  $plan" ."<br>";


$wt="INSERT INTO adduser VALUES('', '$uid', '$fname', '$lname', '$ad', '$gender' , '$mail', '$pass', '$mob', '$plan')";

    $c=$con;

    $rslt=$c->query($wt);

    if($rslt)
    {
        $_SESSION['status'] = "Registerd Successfully";
        $_SESSION['status_code'] = "success";
        header('Location: admission.php');


    }
        
    else 
    {
        $_SESSION['status'] = " Data Not Registerd";
        $_SESSION['status_code'] = "error";
        header('Location: admission.php');
    }


?>



?>
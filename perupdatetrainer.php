<?php

    require("connect.php");

    $ud=$_GET["uid"];

    $fn=$_GET["fname"];

    $ln=$_GET["lname"];

    $addrs=$_GET["add"];

    $gen=$_GET["gen"];

    $mail=$_GET["em"];

    $mob=$_GET["mobile"];

    $dgt=$_GET["br"];

    $cn=$con;

    $update="UPDATE addtrainer SET fname='$fn', lname='$ln', address='$addrs', gender='$gen', email='$mail', mobile='$mob', designation='$dgt' WHERE uid='$ud'  ";
    if ($cn->query($update)===TRUE)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        $_SESSION['status_code'] = "success";

        header("Location: showtrainerdetails.php");
    }
    else
    {   
        $_SESSION['status'] = "Data Not Updated ";
        $_SESSION['status_code'] = "error";

        header("Location: showtrainerdetails.php");

    }



?>

<!DOCTYPE html>
<html>
    <?php  require("connect.php"); ?>

<head>
    <title>Add Trainer Details</title>
    <link rel="stylesheet" type="text/css" href="addtrainer.css">

</head>

<body>
<script src="js/sweetalert.js"></script>

    


    <center><h1>Add Your Trainer Details</h1></center>

    <div class="main">
        
    <form name="Regform" action="addtrainer.php" method="POST">

        <center>
            <table border="0" cellspacing="11">
                <tr>
                    <td><label>* First Name</label></td>
                    <td><input type="text" name="fname" placeholder ="Enter your first name"></td>
                </tr>


                <tr>
                    <td><label>* Last Name</label></td>
                    <td><input type="text" name="lname" placeholder ="Enter your last name"></td>
                </tr>

                <tr>
                    <td><label>* Address </label></td>
                    <td><input type="text" name="add" placeholder ="Enter your address"></td>
                </tr>

                <tr>
                    <td>
                        <lable>* Gender </lable>
                    </td>
                    <td><input type="radio" name="gen" value="Female">FEMALE</td>
                    <td><input type="radio" name="gen" value="Male">MALE</td>
                </tr>

                <tr>
                    <td><label>* Email Id</label></td>
                    <td><input type="text" name="em" placeholder ="Enter your email id"></td>
                </tr>

                <tr>
                    <td><label>* PASSWORD</label></td>
                    <td><input type="text" name="passwd" placeholder ="Enter your password"></td>
                </tr>

                <tr>
                    <td><label>* Mobile No </label></td>
                    <td><input type="text" name="mobile" placeholder ="Enter your phone number"></td>
                </tr>

                <tr>
                    <td><label>* Designation </label></td>
                    <td><select name="br">
                            <option> select </option>
                            <option value="Cardio"> Cardio Trainer </option>
                            <option value="Personal Trainer"> Personal Trainer </option>
                            <option value="Weightlifting"> Weight Liftiing Trainer</option>
                        </select> </td>
                </tr>




            </table>
            <center>
                <input type="reset" value="Reset">
                <input type="submit" value="Register" onclick="val()">
            </center>
    </center>
    </form>
    </div>

<?php include('includes/footer.php')?>

</body>

</html>
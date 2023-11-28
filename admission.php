<!DOCTYPE html>
<html>

<?php  require("connect.php"); ?>

<head>
    <title>User Admission Section</title>
    <link rel="stylesheet" type="text/css" href="addtrainer.css">

</head>

<body>

<script src="js/sweetalert.js"></script>

    <center><h1>Welcome to Admission Section</h1></center>

    <div class="main">
        
    <form name="Regform" action="adduser.php" method="POST">

        <center>
            <table border="0" cellspacing="11">
                <tr>
                    <td><label>* First Name</label></td>
                    <td><input type="text" name="fname"></td>
                </tr>


                <tr>
                    <td><label>* Last Name</label></td>
                    <td><input type="text" name="lname"></td>
                </tr>

                <tr>
                    <td><label>* Address </label></td>
                    <td><input type="text" name="add"></td>
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
                    <td><input type="text" name="em"></td>
                </tr>

                <tr>
                    <td><label>* PASSWORD</label></td>
                    <td><input type="text" name="passwd"></td>
                </tr>

                <tr>
                    <td><label>* Mobile No </label></td>
                    <td><input type="text" name="mobile"></td>
                </tr>

                <tr>
                    <td><label>* Membership Plan </label></td>
                    <td><select name="br">
                            <option> select </option>
                            <option value="Basic Plan"> Basic Plan(R.S 300) </option>
                            <option value="Premium Plan"> Premium Plan(R.S 500) </option>
                            <option value="Enterprise">Enterprise(R.S 1000)</option>
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
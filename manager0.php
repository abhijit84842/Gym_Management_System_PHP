<!DOCTYPE html>
<html>
<?php  require("connect.php"); ?>

<head>
    <title>Add Manager</title>
    <center>
        <h1>Add Manager Details..</h1>
    </center>
    <link rel="stylesheet" type="text/css" href="manager.css">

</head>


<body>

<script src="js/sweetalert.js"></script>

    <div class="main">

        <form name="Regform" action="manager.php" method="POST">

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
                        <td><label>* Mobile No </label></td>
                        <td><input type="text" name="mobile"></td>
                    </tr>

                </table>
                <center>
                    <input type="reset" value="Reset">
                    <input type="submit" value="Submit" onclick="val()">
                </center>
            </center>
        </form>
    </div>

    <?php include('includes/footer.php')?>

</body>

</html>
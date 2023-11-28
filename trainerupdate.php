<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title> Trainer Details Update</title>
 

</head>

<body>

        <center><h1>Update Trainer Details</h1></center>


        <div class ="container">
            <?php
                require("connect.php");

                $u=$_GET["uid"];

                echo "Welcome to Trainer Details Update Panel";

                $select="SELECT * FROM addtrainer WHERE uid='$u'";

                $cn=$con;

                $result=$cn->query($select);

            ?>
            <form action="perupdatetrainer.php" method="GET" style="width:50vw; min-width:300px; ">
            <?php
            $row= mysqli_fetch_assoc($result)
            
                ?>

                <table class="table">
                    <tr>
                        <label class="form-label">First Name: </label>
                        <input type="text" class="form-control" <?php echo 'name="fname" '?>  value="<?php echo $row['fname']  ?> ">

                    </tr>

                    <tr>
                        <label class="form-label">Last Name: </label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $row['lname']  ?> ">

                    </div>


                    </tr>
                        <label class="form-label">Address: </label>
                        <input type="text" class="form-control" name="add" value="<?php echo $row['address']  ?> ">

                    </tr>

                    

                    <tr class="form-group mb-3">
                        <label class="form-label">Email id: </label>
                        <input type="text" class="form-control" name="em" value="<?php echo $row['email']  ?> ">

                    </tr>

                    

                    <tr>
                        <label class="form-label">Mobile No: </label>
                        <input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile']  ?> ">

                    </tr>

                    <tr>
                        <label class="form-label">Designation : </label>
                        <input type="text" class="form-control" name="br" value="<?php echo $row['designation']  ?> ">

                    </tr>


                    <tr>
                        <label class="form-label">Gender: </label>   &nbsp; &nbsp; &nbsp; &nbsp;
                        <input type="radio" class="form-check-input" name="gen" id="male"  value= "Male" <?php echo ($row['gender']=='male') ? "checked": ""; ?> >

                        <label for ="male" class="form-input-label"> MALE </label> &nbsp; &nbsp; &nbsp; &nbsp;
                    

                     
                        <input type="radio" class="form-check-input" name="gen" id="female"  value= "Female" <?php echo ($row['gender']=='female') ? "checked": ""; ?> >

                        <label for ="female" class="form-input-label"> FEMALE </label> &nbsp; &nbsp; &nbsp; &nbsp;

                    </tr>




                    
                    <tr>.<center>
                    <?php
                        
			            echo "<input type='hidden' name='uid' value='$u'>";

			            echo "<input type='submit' value='Update'>";

                    ?>
                    </tr></center>





                </table>

            </form>
          
            
                
    </div>

  
    <?php include('includes/footer.php')?>

</body>

</html>

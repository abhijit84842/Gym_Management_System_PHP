

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
    <link rel="stylesheet" type="text/css" href="try.css">
</head>
<body>

<center><h1>Student All Details</h1></center>

<table class="table table-hover text-center">
  <thead class="table-success">
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">User id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Email id</th>
      
      <th scope="col">Mobile</th>
      <th scope="col">Membership Plan</th>
      
      <th scop="col">Action</th>
    </tr>
  </thead>


  <tbody>
    <?php
        require("connect.php");
        $qr="SELECT * FROM adduser";
        $cn=$con;
        $result=$cn->query($qr);

        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                ?>
                
                <tr>
                <td> <?php echo $row["sl"] ?> </td>
                <td> <?php echo $row["uid"] ?> </td>
                <td> <?php echo $row["fname"] ?> </td>
                <td> <?php echo $row["lname"] ?> </td>
                <td> <?php echo $row["address"] ?> </td>
                <td> <?php echo $row["gender"] ?> </td>
                <td> <?php echo $row["email"] ?> </td>
                
                <td> <?php echo $row["mobile"] ?> </td>
                <td> <?php echo $row["membership"] ?> </td>
                

                

                <td>
                    <a href="studentupdate.php ? uid=<?php echo $row['uid'] ?>"  class="link-dark"><i class="fa-solid fa-pen-to-square"></i></a>

                    <a href="deletestudent.php ? uid=<?php echo $row['uid'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                </td>
                </tr>

                <?php
            }
        }
    ?>


    

  </tbody>
</table>

<?php include('includes/footer.php')?>

</body>

</html>




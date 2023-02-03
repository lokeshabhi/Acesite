<?php

if (isset ($_POST['Send']) {
	# code...

	include 'connection.php';

	$name = $_POST['name'];
	$email = $Post['email'];
	$phonenumber = $Post['phonenumber'];
  $place = $Post['place'];

	 $sql = " INSERT INTO registerform(name,email,phonenumber,place) VALUES ('$name','$email','$phonenumber', '$place')";
    if (mysqli_query($conn, $sql))
    {
     echo "Thank you for connecting us, please check your mail for further details.";
    }
    else
    {
      echo "data not added";
    }
}
  ?>
}
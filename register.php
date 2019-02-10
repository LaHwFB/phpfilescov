<?php
   $con=mysqli_connect("https://127.0.0.1:443/phpmyadmin","root","","covoiturage");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $result = mysqli_query($con,"INSERT INTO users(id,name,email,email_verified_at,passorwd) values(3,"spock","spock@gmail",now(),"123456")");

   mysqli_close($con);
?>

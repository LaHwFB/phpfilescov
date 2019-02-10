<?php
   $con=mysqli_connect("https://databases-auth.000webhost.com","id8695958_root","password","id8695958_covoiturage");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $mail = $_POST['email'];
   $password = $_POST['password'];
   $result = mysqli_query($con,"SELECT email,password FROM table1 where
   email='$mail' and password='$password'");
   $row = mysqli_fetch_array($result);
   $data = $row[0];

   if($data){
      echo $data;
   }

   mysqli_close($con);
?>

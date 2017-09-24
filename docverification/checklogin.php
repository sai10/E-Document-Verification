<?php
   include("config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
	   $myusername = mysqli_real_escape_string($db,$_POST["username"]);
       $mypassword = mysqli_real_escape_string($db,$_POST["password"]);
	   
       $sql = "SELECT id FROM members WHERE username = '$myusername' and password = '$mypassword'";
	   $result = mysqli_query($db,$sql);
       $count= mysqli_num_rows($result);
       
	   
		   if($count ==1 )
	   {
		  session_start();
		  $_SESSION['phpuser']='true';
          $_SESSION['user_login'] = $myusername;
          header("location: app.php");
	   } 
	   
	  else 
	  {
         header("location: mainlogin1.php");
      }
   }
	   
?>
<?php
   include('config.php');
   
   $user_check = $_SESSION['user_login'];
   
   $ses_sql = mysqli_query($db,"select username from members where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['user_login'])){
      header("location:mainlogin.php");
   }
?>
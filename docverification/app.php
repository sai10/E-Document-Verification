<?php
session_start();
 include('session.php');
 echo "<body style='background-color:bisque'>";
 ?>

<form action="ress.php" method="post">
<h4><u>PLEASE ENTER THE APPLICATION ID</u></h4>
<b>Application ID:</b><input type="text" name="aid"/>
<input type="submit" name="submit" value="Submit"/>
</form>

<a href="logout.php">Click here</a> to Logout.
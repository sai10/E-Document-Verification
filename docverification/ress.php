<?php
$aid=$_POST["aid"];
$found=0;
$handle1=fopen('entiredata.csv','r');
while($record1=fgetcsv($handle1,1000))
{
	if($aid==$record1[0])
	{
		$found=1;
		$jpm=$record1[7];
		$jcm=$record1[8];
		$jmm=$record1[9];
		$jts=$record1[7]+$record1[8]+$record1[9];
		$gender=$record1[2];
		break;
	}
}
fclose($handle1);
$handle2=fopen("studentdetails.csv","r");
    while($record2=fgetcsv($handle2,500))
    {
       if($aid==$record2[0])
       {
        $found=2;
        break;
       }
    
     }
fclose($handle2);
?>

<?php  if($found==0){ ?>
       <?php echo 'Application Id '.$aid. ' not found'; ?>
    <form action="app.php" method="post">
    <input type="submit" name="return" value="BACK">
    </form>

<?php } ?>
<?php
 echo "<body style='background-color:bisque'>";
      
 ?>
 
<?php if($found==1) {?>
<?php echo 'Application ID ' . $aid .' found';?>
<form action="ress1.php" method="post">
<input type="hidden" value="<?php echo $aid;  ?>" name="aid"/>
<table>
<tr><td><label><b>NAME: </b></label></td><td><input type="text" name="name" value="<?php echo "{$record1[1]}"?>" /></td></tr>
<tr><td><label><b>GENDER: </b></label></td><td><select name="gender" style="width:173px">
 <?php if($gender=="Male")
		{
			$gen1="Male";
			
		}
		if($gender=="Female")
		{
			$gen1="Female";
		}
		if($gender==null)
		{
			$gen1="select";
		}?>
<option value="<?php echo "$gender"?>"><?php echo $gen1;?></option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</tr></td>
<tr><td><label><b>Date of birth</b></label></td></tr>
<tr><td><label><b>DATE: </b></label></td><td><input type="text" name="bdate" value="<?php echo "{$record1[3]}"?>" />
<tr><td><label><b>MONTH:</b></label></td><td><input type="text" name="month" value="<?php echo "{$record1[4]}"?>" />
<tr><td><label><b>YEAR: </b></label></td><td><input type="text" name="year" value="<?php echo "{$record1[5]}"?>" />
<tr><td><label><b>JEE ROLL NO: </b></label></td><td><input type="text" name="jrn" value="<?php echo "{$record1[6]}"?>" /><br><td></tr>

<tr><td><br><label><b>Choose Category :</b></label><br></td></tr>

<tr><td><input type="radio" name="category" value="General">General<br></td></tr>
<tr><td><input type="radio" name="category" value="ST"/>ST<br></td></tr>
<tr><td><input type="radio" name="category" value="SC"/>SC<br></td><br><br></tr>
<tr><td><br><label><b>XTH MARKS:</b></label><br></td></tr>
<tr><td><label>Marks Obtained:</label></td><td><input name="xmo" type="text"/></td></tr>
<tr><td><label>Total Marks:</label></td><td><input id="second" name="xtm" type="text"/><br><br></td></tr>

<tr><td><br><label><b>XIITH MARKS:</b></label><br></td></tr>
<tr><td><label>PHYSICS</label></td><td><label>Marks Obtained:</label></td><td><input name="pm" type="text"/></td>
<td><label>Full Marks:</label></td><td><input name="pm1" type="text"/></td></tr>
<tr><td><label>CHEMISTRY</label></td><td><label>Marks Obtained:</label></td><td><input name="cm" type="text"/></td><td>
<label>Full Marks:</label></td><td><input name="cm1" type="text"/></td></tr>
<tr><td><label>MATHS</label></td><td><label>Marks Obtained:</label></td><td><input name="mm" type="text"/></td><td>
<label>Full Marks:</label></td><td><input name="mm1" type="text"/></td></tr>
<tr><td><label>Marks Obtained:</label></td><td><input  name="x1mo" type="text"/></td></tr>
<tr><td><label>Total Marks:</label></td><td><input  name="x1tm" type="text"/></td></tr>

<tr><td><br><label><b>JEE MAIN MARKS:</b></label><br></td></tr>
<tr><td><label>Physics:</label></td><td><input name="jpm" type="text" value="<?php echo $jpm; ?>" /></td></tr>
<tr><td><label>Chemistry:</label></td><td><input name="jcm" type="text" value="<?php echo $jcm; ?>" /></td></tr>
<tr><td><label>Maths:</label></td><td><input name="jmm" type="text" value="<?php echo $jmm; ?>" /></td></tr>
<tr><td><label>Main Score:</label></td><td><input name="jts" type="text"  value="<?php echo $jts; ?>" /></td></tr>
</table>
<input type="submit"  align="right" value="NEXT"/>
</form>
<?php } ?>
<?php if($found==2) { ?>
<?php echo 'The verification has already been done for the candidate'; ?>
<?php echo '</br>'.'</br>'.'<b>'.'Application ID:'.'</b>'." ".$aid;
      echo '</br>'.'</br>'.'<b>'.'NAME: '.'</b>'." "."{$record2[1]}";
	  echo '</br>'.'</br>'.'<b>'.'Verified on: '.'</b>'."{$record2[57]}"." ".'<b>'.'Time: '.'</b>'."{$record2[58]}";
	  ?>
	  </br></br>
	  <form action="app.php" method="post">
	  <input type="submit" value="BACK"/>
	  </form>
<?php } ?>
<a href="logout.php">Click here</a> to Logout.

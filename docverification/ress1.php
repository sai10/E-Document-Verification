<?php
 echo "<body style='background-color:bisque'>";
 ?>
<?php
error_reporting(0);
if(!empty($_POST["category"]))

    $aid=$_POST["aid"];
	$name=$_POST["name"];
	$gender=$_POST["gender"];
	$bdate=$_POST["bdate"];
	$month=$_POST["month"];
	$year=$_POST["year"];
	$jrn=$_POST["jrn"];
	$cat=$_POST["category"];
	$xmo=$_POST["xmo"];
	$xtm=$_POST["xtm"];
	$xp=round(($xmo/$xtm)*100,2);
	
	$pm=$_POST["pm"];
	$cm=$_POST["cm"];
	$mm=$_POST["mm"];
	$pm1=$_POST["pm1"];
	$cm1=$_POST["cm1"];
	$mm1=$_POST["mm1"];
	$x1mo=$_POST["x1mo"];
	$x1tm=$_POST["x1tm"];
	/*adding an edit here
	introducing a if clause*/
	
	$pcm=round((($pm+$cm+$mm)/($pm1+$cm1+$mm1))*100,2);
	$x1p=round(($x1mo/$x1tm)*100,2);
	
	$jpm=$_POST["jpm"];
	$jcm=$_POST["jcm"];
	$jmm=$_POST["jmm"];
	$jts=$_POST["jts"];
	$fp=fopen('entiredata.csv','r');
	while($record=fgetcsv($fp,1000))
	{
		if($aid==$record[0])
	{
		$choice1=$record[10];
		$choice2=$record[11];
		$choice3=$record[12];
		$choice4=$record[13];
		$choice5=$record[14];
		$choice6=$record[15];
		$choice7=$record[16];
		$choice8=$record[17];
		$choice9=$record[18];
		$choice10=$record[19];
		
	}
	}
	fclose($fp);
		
		if($choice1=="CSETFW")
		{
			$text1="Computer Science and Engineering(TFW)";
		}
		if($choice1=="CSE")
		{
			$text1="Computer Science and Engineering";
		}
		if($choice1=="Computer Engg(TFW)")
		{
			$text1="Computer Engineering(TFW)";
		}
		if($choice1=="Computer Engg")
		{
			$text1="Computer Engineering";
		}
		if($choice1=="EEETFW")
		{
			$text1="Electrical and Electronics Engineering(TFW)";
		}
		if($choice1=="EEE")
		{
			$text1="Electrical and Electronics Engineering";
		}
		if($choice1=="ETCTFW")
		{
			$text1="Electronics and Telecommunication Engineering(TFW)";
		}
		if($choice1=="ETC")
		{
			$text1="Electronics and Telecommunication Engineering";
		}
		if($choice1=="ITTFW")
		{
			$text1="Information Technology(TFW)";
		}
		if($choice1=="IT")
		{
			$text1="Information Technology";
		}
		if($choice1==null)
		{
			$text1="select";
		}
		if($choice2=="CSETFW")
		{
			$text2="Computer Science and Engineering(TFW)";
		}
		if($choice2=="CSE")
		{
			$text2="Computer Science and Engineering";
		}
		if($choice2=="Computer Engg(TFW)")
		{
			$text2="Computer Engineering(TFW)";
		}
		if($choice2=="Computer Engg")
		{
			$text2="Computer Engineering";
		}
		if($choice2=="EEETFW")
		{
			$text2="Electrical and Electronics Engineering(TFW)";
		}
		if($choice2=="EEE")
		{
			$text2="Electrical and Electronics Engineering";
		}
		if($choice2=="ETCTFW")
		{
			$text2="Electronics and Telecommunication Engineering(TFW)";
		}
		if($choice2=="ETC")
		{
			$text2="Electronics and Telecommunication Engineering";
		}
		if($choice2=="ITTFW")
		{
			$text2="Information Technology(TFW)";
		}
		if($choice2=="IT")
		{
			$text2="Information Technology";
		}
		if($choice2==null)
		{
			$text2="select";
		}
		if($choice3=="CSETFW")
		{
			$text3="Computer Science and Engineering(TFW)";
		}
		if($choice3=="CSE")
		{
			$text3="Computer Science and Engineering";
		}
		if($choice3=="Computer Engg(TFW)")
		{
			$text3="Computer Engineering(TFW)";
		}
		if($choice3=="Computer Engg")
		{
			$text3="Computer Engineering";
		}
		if($choice3=="EEETFW")
		{
			$text3="Electrical and Electronics Engineering(TFW)";
		}
		if($choice3=="EEE")
		{
			$text3="Electrical and Electronics Engineering";
		}
		if($choice3=="ETCTFW")
		{
			$text3="Electronics and Telecommunication Engineering(TFW)";
		}
		if($choice3=="ETC")
		{
			$text3="Electronics and Telecommunication Engineering";
		}
		if($choice3=="ITTFW")
		{
			$text3="Information Technology(TFW)";
		}
		if($choice3=="IT")
		{
			$text3="Information Technology";
		}
		if($choice3==null)
		{
			$text3="select";
		}
		if($choice4=="CSETFW")
		{
			$text4="Computer Science and Engineering(TFW)";
		}
		if($choice4=="CSE")
		{
			$text4="Computer Science and Engineering";
		}
		if($choice4=="Computer Engg(TFW)")
		{
			$text4="Computer Engineering(TFW)";
		}
		if($choice4=="Computer Engg")
		{
			$text4="Computer Engineering";
		}
		if($choice4=="EEETFW")
		{
			$text4="Electrical and Electronics Engineering(TFW)";
		}
		if($choice4=="EEE")
		{
			$text4="Electrical and Electronics Engineering";
		}
		if($choice4=="ETCTFW")
		{
			$text4="Electronics and Telecommunication Engineering(TFW)";
		}
		if($choice4=="ETC")
		{
			$text4="Electronics and Telecommunication Engineering";
		}
		if($choice4=="ITTFW")
		{
			$text4="Information Technology(TFW)";
		}
		if($choice4=="IT")
		{
			$text4="Information Technology";
		}
		if($choice4==null)
		{
			$text4="select";
		}
		if($choice5=="CSETFW")
		{
			$text5="Computer Science and Engineering(TFW)";
		}
		if($choice5=="CSE")
		{
			$text5="Computer Science and Engineering";
		}
		if($choice5=="Computer Engg(TFW)")
		{
			$text5="Computer Engineering(TFW)";
		}
		if($choice5=="Computer Engg")
		{
			$text5="Computer Engineering";
		}
		if($choice5=="EEETFW")
		{
			$text5="Electrical and Electronics Engineering(TFW)";
		}
		if($choice5=="EEE")
		{
			$text5="Electrical and Electronics Engineering";
		}
		if($choice5=="ETCTFW")
		{
			$text5="Electronics and Telecommunication Engineering(TFW)";
		}
		if($choice5=="ETC")
		{
			$text5="Electronics and Telecommunication Engineering";
		}
		if($choice5=="ITTFW")
		{
			$text5="Information Technology(TFW)";
		}
		if($choice5=="IT")
		{
			$text5="Information Technology";
		}
		if($choice5==null)
		{
			$text5="select";
		}
		if($choice6=="CSETFW")
		{
			$text6="Computer Science and Engineering(TFW)";
		}
		if($choice6=="CSE")
		{
			$text6="Computer Science and Engineering";
		}
		if($choice6=="Computer Engg(TFW)")
		{
			$text6="Computer Engineering(TFW)";
		}
		if($choice6=="Computer Engg")
		{
			$text6="Computer Engineering";
		}
		if($choice6=="EEETFW")
		{
			$text6="Electrical and Electronics Engineering(TFW)";
		}
		if($choice6=="EEE")
		{
			$text6="Electrical and Electronics Engineering";
		}
		if($choice6=="ETCTFW")
		{
			$text6="Electronics and Telecommunication Engineering(TFW)";
		}
		if($choice6=="ETC")
		{
			$text6="Electronics and Telecommunication Engineering";
		}
		if($choice6=="ITTFW")
		{
			$text6="Information Technology(TFW)";
		}
		if($choice6=="IT")
		{
			$text6="Information Technology";
		}
		if($choice6==null)
		{
			$text6="select";
		}
		if($choice7=="CSETFW")
		{
			$text7="Computer Science and Engineering(TFW)";
		}
		if($choice7=="CSE")
		{
			$text7="Computer Science and Engineering";
		}
		if($choice7=="Computer Engg(TFW)")
		{
			$text7="Computer Engineering(TFW)";
		}
		if($choice7=="Computer Engg")
		{
			$text7="Computer Engineering";
		}
		if($choice7=="EEETFW")
		{
			$text7="Electrical and Electronics Engineering(TFW)";
		}
		if($choice7=="EEE")
		{
			$text7="Electrical and Electronics Engineering";
		}
		if($choice7=="ETCTFW")
		{
			$text7="Electronics and Telecommunication Engineering(TFW)";
		}
		if($choice7=="ETC")
		{
			$text7="Electronics and Telecommunication Engineering";
		}
		if($choice7=="ITTFW")
		{
			$text7="Information Technology(TFW)";
		}
		if($choice7=="IT")
		{
			$text7="Information Technology";
		}
		if($choice7==null)
		{
			$text7="select";
		}
		if($choice8=="CSETFW")
		{
			$text8="Computer Science and Engineering(TFW)";
		}
		if($choice8=="CSE")
		{
			$text8="Computer Science and Engineering";
		}
		if($choice8=="Computer Engg(TFW)")
		{
			$text8="Computer Engineering(TFW)";
		}
		if($choice8=="Computer Engg")
		{
			$text8="Computer Engineering";
		}
		if($choice8=="EEETFW")
		{
			$text8="Electrical and Electronics Engineering(TFW)";
		}
		if($choice8=="EEE")
		{
			$text8="Electrical and Electronics Engineering";
		}
		if($choice8=="ETCTFW")
		{
			$text8="Electronics and Telecommunication Engineering(TFW)";
		}
		if($choice8=="ETC")
		{
			$text8="Electronics and Telecommunication Engineering";
		}
		if($choice8=="ITTFW")
		{
			$text8="Information Technology(TFW)";
		}
		if($choice8=="IT")
		{
			$text8="Information Technology";
		}
		if($choice8==null)
		{
			$text8="select";
		}
	    if($choice9=="CSETFW")
		{
			$text9="Computer Science and Engineering(TFW)";
		}
		if($choice9=="CSE")
		{
			$text9="Computer Science and Engineering";
		}
		if($choice9=="Computer Engg(TFW)")
		{
			$text9="Computer Engineering(TFW)";
		}
		if($choice9=="Computer Engg")
		{
			$text9="Computer Engineering";
		}
		if($choice9=="EEETFW")
		{
			$text9="Electrical and Electronics Engineering(TFW)";
		}
		if($choice9=="EEE")
		{
			$text9="Electrical and Electronics Engineering";
		}
		if($choice9=="ETCTFW")
		{
			$text9="Electronics and Telecommunication Engineering(TFW)";
		}
		if($choice9=="ETC")
		{
			$text9="Electronics and Telecommunication Engineering";
		}
		if($choice9=="ITTFW")
		{
			$text9="Information Technology(TFW)";
		}
		if($choice9=="IT")
		{
			$text9="Information Technology";
		}
		if($choice9==null)
		{
			$text9="select";
		}
		if($choice10=="CSETFW")
		{
			$text10="Computer Science and Engineering(TFW)";
		}
		if($choice10=="CSE")
		{
			$text10="Computer Science and Engineering";
		}
		if($choice10=="Computer Engg(TFW)")
		{
			$text10="Computer Engineering(TFW)";
		}
		if($choice10=="Computer Engg")
		{
			$text10="Computer Engineering";
		}
		if($choice10=="EEETFW")
		{
			$text10="Electrical and Electronics Engineering(TFW)";
		}
		if($choice10=="EEE")
		{
			$text10="Electrical and Electronics Engineering";
		}
		if($choice10=="ETCTFW")
		{
			$text10="Electronics and Telecommunication Engineering(TFW)";
		}
		if($choice10=="ETC")
		{
			$text10="Electronics and Telecommunication Engineering";
		}
		if($choice10=="ITTFW")
		{
			$text10="Information Technology(TFW)";
		}
		if($choice10=="IT")
		{
			$text10="Information Technology";
		}
		if($choice10==null)
		{
			$text10="select";
		}
	
	
	date_default_timezone_set("Asia/Calcutta");
	$time=date("h:i:sa");
	$date=date("d-m-Y");
	
?>
<?php if($cat=="General"){ ?>

<?php if(($pm/100<0.45)||($cm/100<0.45)||($mm/100<0.45)){ ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 45% in any of the subjects of PCM.';?>
	
</br></br>
<form action="app.php" method="post">
<input type="submit" name="return" value="RETURN"/>
</form>
<?php } ?>
<?php if($pcm<45){ ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 45% in PCM.';?>
<?php } ?>

<?php if($pcm<45 && $xp<60 && $x1p>=60) { ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 45% in PCM and less than 60% in 10th.';?>
<?php } ?>

<?php if($pcm<45 && $xp>=60 && $x1p<60) { ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 45% in PCM and less than 60% in 12th.';?>
<?php } ?>

<?php if($pcm<45 && $xp<60 && $x1p<60) { ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 45% in PCM and less than 60% in 10th and 12th.';?>
<?php } ?>

<?php if($pcm>=45) { ?>
<?php if($xp<60 && $x1p>=60){ ?>

<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible';
?>
<?php echo '</br>'.'</br>'.'Due to less than 60% in 10th.';?>

</br></br>
<form action="app.php" method="post">
<input type="submit" name="return" value="RETURN"/>
</form>
<?php } ?>
<?php if($xp>=60 && $x1p<60 ){ ?>

<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible';
?>
<?php echo '</br>'.'</br>'.'Due to less than 60% in 12th.';?>
</br></br>
<form action="app.php" method="post">
<input type="submit" name="return" value="RETURN"/>
</form>
<?php } ?>
<?php if($xp<60 && $x1p<60){ ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible';
?>
<?php echo '</br>'.'</br>'.'Due to less than 60% in 10th and 12th.';?>
</br></br>
<form action="app.php" method="post">
<input type="submit" name="return" value="RETURN"/>
</form>


<?php } ?>
<?php if( $xp>=60 && $x1p>=60 &&(($pm/100>0.45)&&($cm/100>0.45)&&($mm/100>0.45))) { ?>
<!-- edit done here -->

<form method="post" id="formG" action='vslip.php'>
<table>
<tr><td><label><b>Application ID : </b></label></td><td><input type="text" name="aid" value="<?php echo $aid; ?>" readonly /></td></tr>
<tr><td><label><b>Name :           </b></label></td><td><input type="text" name="name" value="<?php echo $name; ?>" readonly /></td></tr>
<tr><td><label><b>Gender:          </b></label></td><td><input type="text" name="gender" value="<?php echo $gender;?>" readonly /></td></tr>
<tr><td><label>Date of birth</label></td></tr>
<tr><td><label><b>Date:          </b></label></td><td><input type="text" name="bdate" value="<?php echo $bdate;?>" readonly /></td></tr>
<tr><td><label><b>Month:         </b></label></td><td><input type="text" name="month" value="<?php echo $month;?>" readonly /></td></tr>
<tr><td><label><b>Year:          </b></label></td><td><input type="text" name="year" value="<?php echo $year;?>" readonly /></td></tr>
<tr><td><label><b>JEE ROLL NO:          </b></label></td><td><input type="text" name="jrn" value="<?php echo $jrn;?>" readonly /></td></tr>
<tr><td><label><b>Category :       </b></label></td><td><input type="text" name="category" value="<?php echo $cat ?>" readonly /></td></tr>

<tr><td><label><b>XTH MARKS:       </b></label></td></tr>

<tr><td><label><b>Total Marks Obtained:  </b></label></td><td><input type="text" name="xmo" value="<?php echo $xmo; ?>"readonly /> </td></tr> 
<tr><td><label><b>Total Marks :    </b></td></label><td><input type="text" name="xtm" value="<?php echo $xtm; ?>" readonly /></td></tr>
<tr><td><label><b>Percentage :    </b></label></td><td><input type="text" name="xp" value="<?php echo round($xp,2); ?>" readonly /></td></tr>

<tr><td><label><b>XIITH MARKS:    </b></label></td>

<tr><td><label><b>Physics:  </b></label></td><td><input type="text" name="pm" value="<?php echo $pm; ?>"readonly /></td><td>/</td><td><input type="text" name="pm1" value="<?php echo $pm1;?>"readonly /> </td></tr>
<tr><td><label><b>Chemistry:  </b></label></td><td><input type="text" name="cm" value="<?php echo $cm; ?>"readonly /></td><td>/</td><td><input type="text" name="cm1" value="<?php echo $cm1;?>"readonly />
<tr><td><label><b>Maths:  </b></label></td><td><input type="text" name="mm" value="<?php echo $mm; ?>"readonly /></td><td>/</td><td><input type="text" name="mm1" value="<?php echo $mm1;?>"readonly />
<tr><td><label><b>PCM %:  </b></label></td><td><input type="text" name="pcm" value="<?php echo $pcm; ?>"readonly /> </td></tr>
<tr><td><label><b>Total Marks Obtained: </b></label></td><td><input type="text" name="x1mo" value="<?php echo $x1mo; ?>" readonly /></td></tr>
<tr><td><label><b>Total Marks :    </b></label></td><td><input type="text" name="x1tm" value="<?php echo $x1tm; ?>" readonly /></td></tr>
<tr><td><label><b>Percentage :     </b></label></td><td><input type="text" name="x1p" value="<?php echo round($x1p,2); ?>" readonly /></td></tr>

<tr><td><label><b>JEE MAIN MARKS:    </b></label></td>

<tr><td><label><b>Physics:  </b></label></td><td><input type="text" name="jpm" value="<?php echo $jpm; ?>"readonly /> </td></tr>
<tr><td><label><b>Chemistry:  </b></label></td><td><input type="text" name="jcm" value="<?php echo $jcm; ?>"readonly /> </td></tr>
<tr><td><label><b>Maths:  </b></label></td><td><input type="text" name="jmm" value="<?php echo $jmm; ?>"readonly /> </td></tr>
<tr><td><label><b>Total Score:  </b></label></td><td><input type="text" name="jts" value="<?php echo $jts; ?>"readonly /> </td></tr>

</table>
<br/>
<br/>
<h3><u><b>List of documents required for verification</b></u></h3>

<input type="checkbox" name="box1" id="orc"/><label><b>Original Rank Card</b></label><br><br>
<input type="checkbox" name="box2" id="ors"/><label><b>Original online registration slip</b></label><br><br>
<input type="checkbox" name="box3" id="bc"/><label><b>H.S.C or any other relevant certificate showing the date of birth</b></label><br><br>
<input type="checkbox" name="box4" id="pcmc"/><label><b>10+2 Pass Certificate or Mark Sheet</b></label><br><br>
<input type="checkbox" name="box5" id="slc"/><label><b>School Leaving/ College Leaving Certificate</b></label><br><br>
<input type="checkbox" name="box6" id="rc"/><label><b>Original 'Resident of Odisha' Certificate/ Nativity Certificate from concerned Tahasildar</b></label><br><br>
<input type="checkbox" name="box7" id="scstc" disabled /><label><b>Original SC Certificate by birth</b></label><br><br>
<input type="checkbox" name="box8" id="scstc" disabled /><label><b>Original ST Certificate by birth</b></label><br><br>
<input type="checkbox" name="box9" id="es"/><label><b>Original Certificate of Ex-servicemen</b></label><br><br>
<input type="checkbox" name="box10" id="gc"/><label><b>Original Green Card issued by Family Welfare Department of Odisha</b></label><br><br>
<input type="checkbox" name="box11" id="pc"/><label><b>Disability certificate from the competent authority of Govt.Of Odisha not below the rank of CDMO</b></label><br><br>
<input type="checkbox" name="box12" id="ol"/><label><b>Original Certificate in support of Outlying Odia Speaking Tract(OL)</b></label><br><br>
<input type="checkbox" name="box13" id="tfw"/><label><b>Income Certificate for TFW candidate.</b></label><br><br>
<input type="checkbox" name="box14" id="ord"/><label><b>Other relevant document(s) if any</b></label><br><br>
<br>
<h3><u><b>Choose Branch Preference</b></u></h3>
Choice 1:<select name="choice1" style="width:170px;">
<option value="<?php echo $choice1;?>" readonly ><?php echo $text1;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 2:<select name="choice2" style="width:170px;">
<option value="<?php echo $choice2;?>" readonly ><?php echo $text2;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 3:<select name="choice3" style="width:170px;">
<option value="<?php echo $choice3;?>" readonly ><?php echo $text3;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 4:<select name="choice4" style="width:170px;">
<option value="<?php echo $choice4;?>" readonly ><?php echo $text4;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 5:<select name="choice5" style="width:170px;">
<option value="<?php echo $choice5;?>" readonly ><?php echo $text5;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select><br/><br/>
Choice 6:<select  name="choice6" style="width:170px;">
<option value="<?php echo $choice6;?>" readonly ><?php echo $text6;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 7:<select  name="choice7" style="width:170px;">
<option value="<?php echo $choice7;?>" readonly ><?php echo $text7;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 8:<select  name="choice8" style="width:170px;">
<option value="<?php echo $choice8;?>" readonly ><?php echo $text8;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 9:<select  name="choice9" style="width:170px;">
<option value="<?php echo $choice9;?>" readonly ><?php echo $text9;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 10:<select  name="choice10" style="width:170px;">
<option value="<?php echo $choice10;?>" readonly ><?php echo $text10;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
<br><br>
<button  type="submit" onclick=mytoggle()>Print and Save</button>

<input type="button" name="preview" value="preview" onclick="myactionG('preview.php')">
<script>
function mytoggle() {
	if(document.getElementById("ol").checked)
	{
    document.getElementById("rc").disabled = true;
	document.getElementById("es").disabled = true;
	document.getElementById("gc").disabled = true;
	document.getElementById("pc").disabled = true;
	document.getElementById("tfw").disabled = true;
	}
	else 
		if(!document.getElementById("rc").checked)
	{
	document.getElementById("es").disabled = true;
	document.getElementById("gc").disabled = true;
	document.getElementById("pc").disabled = true;
	document.getElementById("tfw").disabled = true;
	}
	
}
</script>
</form>
<form action="app.php" method="post">
<input type="submit" value="RETURN"/>
</form>
<script>
function myactionG(action)
{
	document.getElementById('formG').action = action;
	document.getElementById('formG').submit();
}
</script>
<?php } ?>
<?php } ?>
<?php } ?>

<?php if($cat=="ST"){ ?>

<?php if($pcm<40){ ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 40% in PCM.';?>
<?php } ?>

<?php if($pcm<40 && $xp<55 && $x1p>=55) { ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 40% in PCM and less than 55% in 10th.';?>
<?php } ?>

<?php if($pcm<40 && $xp>=55 && $x1p<55) { ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 40% in PCM and less than 55% in 12th.';?>
<?php } ?>

<?php if($pcm<40 && $xp<55 && $x1p<55) { ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 40% in PCM and less than 55% in 10th and 12th.';?>
<?php } ?>

<?php if($pcm>=40) { ?>
<?php if($xp<55 && $x1p>=55){ ?>

<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible';
?>
<?php echo '</br>'.'</br>'.'Due to less than 55% in 10th.';?>

</br></br>
<form action="app.php" method="post">
<input type="submit" name="return" value="RETURN"/>
</form>
<?php } ?>
<?php if($xp>=55 && $x1p<55 ){ ?>

<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible';
?>
<?php echo '</br>'.'</br>'.'Due to less than 55% in 12th.';?>
</br></br>
<form action="app.php" method="post">
<input type="submit" name="return" value="RETURN"/>
</form>
<?php } ?>
<?php if($xp<55 && $x1p<55){ ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible';
?>
<?php echo '</br>'.'</br>'.'Due to less than 55% in 10th and 12th.';?>
</br></br>
<form action="app.php" method="post">
<input type="submit" name="return" value="RETURN"/>
</form>

<?php } ?>

<?php  if($xp>=55 && $x1p>=55){ ?>
<form action="preview.php" method="post">
<table>
<tr><td><label><b>Application ID : </b></label></td><td><input type="text" name="aid" value="<?php echo $aid; ?>" readonly /></td></tr>
<tr><td><label><b>Name :           </b></label></td><td><input type="text" name="name" value="<?php echo $name; ?>" readonly /></td></tr>
<tr><td><label><b>Gender:          </b></label></td><td><input type="text" name="gender" value="<?php echo $gender;?>" readonly /></td></tr>
<tr><td><label>Date of birth</label></td></tr>
<tr><td><label><b>Date:          </b></label></td><td><input type="text" name="bdate" value="<?php echo $bdate;?>" readonly /></td></tr>
<tr><td><label><b>Month:         </b></label></td><td><input type="text" name="month" value="<?php echo $month;?>" readonly /></td></tr>
<tr><td><label><b>Year:          </b></label></td><td><input type="text" name="year" value="<?php echo $year;?>" readonly /></td></tr>
<tr><td><label><b>JEE ROLL NO:      </b></label></td><td><input type="text" name="jrn" value="<?php echo $jrn;?>" readonly /></td></tr>
<tr><td><label><b>Category :       </b></label></td><td><input type="text" name="category" value="<?php echo $cat ?>" readonly /></td></tr>

<tr><td><label><b>XTH MARKS:       </b></label></td></tr>

<tr><td><label><b>Total Marks Obtained:  </b></label></td><td><input type="text" name="xmo" value="<?php echo $xmo; ?>"readonly /> </td></tr> 
<tr><td><label><b>Total Marks :    </b></td></label><td><input type="text" name="xtm" value="<?php echo $xtm; ?>" readonly /></td></tr>

<tr><td><label><b>Percentage :    </b></label></td><td><input type="text" name="xp" value="<?php echo round($xp,2); ?>" readonly /></td></tr>

<tr><td><label><b>XIITH MARKS:    </b></label></td>

<tr><td><label><b>Physics:  </b></label></td><td><input type="text" name="pm" value="<?php echo $pm; ?>"readonly /></td><td>/</td><td><input type="text" name="pm1" value="<?php echo $pm1;?>"readonly /> </td></tr>
<tr><td><label><b>Chemistry:  </b></label></td><td><input type="text" name="cm" value="<?php echo $cm; ?>"readonly /></td><td>/</td><td><input type="text" name="cm1" value="<?php echo $cm1;?>"readonly />
<tr><td><label><b>Maths:  </b></label></td><td><input type="text" name="mm" value="<?php echo $mm; ?>"readonly /></td><td>/</td><td><input type="text" name="mm1" value="<?php echo $mm1;?>"readonly />
<tr><td><label><b>PCM %:  </b></label></td><td><input type="text" name="pcm" value="<?php echo $pcm; ?>"readonly /> </td></tr>
<tr><td><label><b>Total Marks Obtained : </b></label></td><td><input type="text" name="x1mo" value="<?php echo $x1mo; ?>" readonly /></td></tr>
<tr><td><label><b>Total Marks :    </b></label></td><td><input type="text" name="x1tm" value="<?php echo $x1tm; ?>" readonly /></td></tr>

<tr><td><label><b>Percentage :     </b></label></td><td><input type="text" name="x1p" value="<?php echo round($x1p,2); ?>" readonly /></td></tr>

<tr><td><label><b>JEE MAIN MARKS:    </b></label></td>

<tr><td><label><b>Physics:  </b></label></td><td><input type="text" name="jpm" value="<?php echo $jpm; ?>"readonly /> </td></tr>
<tr><td><label><b>Chemistry:  </b></label></td><td><input type="text" name="jcm" value="<?php echo $jcm; ?>"readonly /> </td></tr>
<tr><td><label><b>Maths:  </b></label></td><td><input type="text" name="jmm" value="<?php echo $jmm; ?>"readonly /> </td></tr>
<tr><td><label><b>Total Score:  </b></label></td><td><input type="text" name="jts" value="<?php echo $jts; ?>"readonly /> </td></tr>

</table>
</br>
</br>
<h3><u><b>List of documents required for verification</b></u></h3>

<input type="checkbox" name="box1" id="orc"/><label><b>Original Rank Card</b></label><br><br>
<input type="checkbox" name="box2" id="ors"/><label><b>Original online registration slip</b></label><br><br>
<input type="checkbox" name="box3" id="bc"/><label><b>H.S.C or any other relevant certificate showing the date of birth</b></label><br><br>
<input type="checkbox" name="box4" id="pcmc"/><label><b>10+2 Pass Certificate or Mark Sheet</b></label><br><br>
<input type="checkbox" name="box5" id="slc"/><label><b>School Leaving/ College Leaving Certificate</b></label><br><br>
<input type="checkbox" name="box6" id="rc"/><label><b>Original 'Resident of Odisha' Certificate/ Nativity Certificate from concerned Tahasildar</b></label><br><br>
<input type="checkbox" name="box7" id="scc" disabled /><label><b>Original SC Certificate by birth</b></label><br><br>
<input type="checkbox" name="box8" id="stc" checked  readonly  onclick="return false" onkeydown="return false"/><label><b>Original ST Certificate by birth</b></label><br><br>
<input type="checkbox" name="box9" id="es"/><label><b>Original Certificate of Ex-servicemen</b></label><br><br>
<input type="checkbox" name="box10" id="gc"/><label><b>Original Green Card issued by Family Welfare Department of Odisha</b></label><br><br>
<input type="checkbox" name="box11" id="pc"/><label><b>Disability certificate from the competent authority of Govt.Of Odisha not below the rank of CDMO</b></label><br><br>
<input type="checkbox" name="box12" id="ol"/><label><b>Original Certificate in support of Outlying Odia Speaking Tract(OL)</b></label><br><br>
<input type="checkbox" name="box13" id="tfw"/><label><b>Income Certificate for TFW candidate.</b></label><br><br>
<input type="checkbox" name="box14" id="ord"/><label><b>Other relevant document(s) if any</b></label><br><br>
<br>

<h3><u><b>Choose Branch Preference</b></u></h3>
Choice 1:<select name="choice1" style="width:170px;">
<option value="<?php echo $choice1;?>" readonly ><?php echo $text1;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 2:<select name="choice2" style="width:170px;">
<option value="<?php echo $choice2;?>" readonly ><?php echo $text2;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 3:<select name="choice3" style="width:170px;">
<option value="<?php echo $choice3;?>" readonly ><?php echo $text3;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 4:<select name="choice4" style="width:170px;">
<option value="<?php echo $choice4;?>" readonly ><?php echo $text4;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 5:<select name="choice5" style="width:170px;">
<option value="<?php echo $choice5;?>" readonly ><?php echo $text5;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select><br/><br/>
Choice 6:<select  name="choice6" style="width:170px;">
<option value="<?php echo $choice6;?>" readonly ><?php echo $text6;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 7:<select  name="choice7" style="width:170px;">
<option value="<?php echo $choice7;?>" readonly ><?php echo $text7;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 8:<select  name="choice8" style="width:170px;">
<option value="<?php echo $choice8;?>" readonly ><?php echo $text8;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 9:<select  name="choice9" style="width:170px;">
<option value="<?php echo $choice9;?>" readonly ><?php echo $text9;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 10:<select  name="choice10" style="width:170px;">
<option value="<?php echo $choice10;?>" readonly ><?php echo $text10;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
<br><br>
<button  type="submit" onclick=mytoggle()>Print and Save</button>
<script>
function mytoggle() {
	if(document.getElementById("ol").checked)
	{
    document.getElementById("rc").disabled = true;
	document.getElementById("stc").disabled = true;
	document.getElementById("es").disabled = true;
	document.getElementById("gc").disabled = true;
	document.getElementById("pc").disabled = true;
	document.getElementById("tfw").disabled = true;
	}
	else 
		if(!document.getElementById("rc").checked)
	{
	document.getElementById("stc").disabled = true;	
	document.getElementById("es").disabled = true;
	document.getElementById("gc").disabled = true;
	document.getElementById("pc").disabled = true;
	document.getElementById("tfw").disabled = true;
	}
}
</script>
</form>
<form action="app.php" method="post">
<input type="submit" value="RETURN"/>
</form>
<form id="formST" >
<input type="button" name="print" value="print&save" onclick="myactionST('vslip.php')">
<input type="button" name="preview" value="preview" onclick="myactionST('preview.php')">
</form>
<script>
function myactionST(action)
{
	document.getElementById('formST').action = action;
	document.getElementById('formST').submit();
}
<?php } ?>
<?php } ?>
<?php } ?>

<?php if($cat=="SC"){ ?>

<?php if($pcm<40){ ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 40% in PCM.';?>
<?php } ?>

<?php if($pcm<40 && $xp<55 && $x1p>=55) { ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 40% in PCM and less than 55% in 10th.';?>
<?php } ?>

<?php if($pcm<40 && $xp>=55 && $x1p<55) { ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 40% in PCM and less than 55% in 12th.';?>
<?php } ?>

<?php if($pcm<40 && $xp<55 && $x1p<55) { ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible'; ?>
<?php echo '</br>'.'</br>'.'Due to less than 40% in PCM and less than 55% in 10th and 12th.';?>
<?php } ?>

<?php if($pcm>=40) { ?>
<?php if($xp<55 && $x1p>=55){ ?>

<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible';
?>
<?php echo '</br>'.'</br>'.'Due to less than 55% in 10th.';?>

</br></br>
<form action="app.php" method="post">
<input type="submit" name="return" value="RETURN"/>
</form>
<?php } ?>
<?php if($xp>=55 && $x1p<55 ){ ?>

<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible';
?>
<?php echo '</br>'.'</br>'.'Due to less than 55% in 12th.';?>
</br></br>
<form action="app.php" method="post">
<input type="submit" name="return" value="RETURN"/>
</form>
<?php } ?>
<?php if($xp<55 && $x1p<55){ ?>
<?php echo 'The Candidate with Application ID'." ".$aid." ".'is not eligible';
?>
<?php echo '</br>'.'</br>'.'Due to less than 55% in 10th and 12th.';?>
</br></br>
<form action="app.php" method="post">
<input type="submit" name="return" value="RETURN"/>
</form>

<?php } ?>

<?php  if($xp>=55 && $x1p>=55){ ?>
<form action="preview.php" method="post">
<table>
<tr><td><label><b>Application ID: </b></label></td><td><input type="text" name="aid" value="<?php echo $aid; ?>" readonly /></td></tr>
<tr><td><label><b>Name :           </b></label></td><td><input type="text" name="name" value="<?php echo $name; ?>" readonly /></td></tr>
<tr><td><label><b>Gender:          </b></label></td><td><input type="text" name="gender" value="<?php echo $gender;?>" readonly /></td></tr>
<tr><td><label><b>Date of birth</b></label></td></tr>
<tr><td><label><b>Date:          </b></label></td><td><input type="text" name="bdate" value="<?php echo $bdate;?>" readonly /></td></tr>
<tr><td><label><b>Month:         </b></label></td><td><input type="text" name="month" value="<?php echo $month;?>" readonly /></td></tr>
<tr><td><label><b>Year:          </b></label></td><td><input type="text" name="year" value="<?php echo $year;?>" readonly /></td></tr>
<tr><td><label><b>JEE ROLL NO:          </b></label></td><td><input type="text" name="jrn" value="<?php echo $jrn;?>" readonly /></td></tr>
<tr><td><label><b>Category :       </b></label></td><td><input type="text" name="category" value="<?php echo $cat ?>" readonly /></td></tr>

<tr><td><label><b>XTH MARKS:       </b></label></td></tr>

<tr><td><label><b>Total Marks Obtained:  </b></label></td><td><input type="text" name="xmo" value="<?php echo $xmo; ?>"readonly /> </td></tr> 
<tr><td><label><b>Total Marks :    </b></td></label><td><input type="text" name="xtm" value="<?php echo $xtm; ?>" readonly /></td></tr>

<tr><td><label><b>Percentage :    </b></label></td><td><input type="text" name="xp" value="<?php echo round($xp,2); ?>" readonly /></td></tr>

<tr><td><label><b>XIITH MARKS:    </b></label></td>

<tr><td><label><b>Physics:  </b></label></td><td><input type="text" name="pm" value="<?php echo $pm; ?>"readonly /></td><td>/</td><td><input type="text" name="pm1" value="<?php echo $pm1;?>"readonly /> </td></tr>
<tr><td><label><b>Chemistry:  </b></label></td><td><input type="text" name="cm" value="<?php echo $cm; ?>"readonly /></td><td>/</td><td><input type="text" name="cm1" value="<?php echo $cm1;?>"readonly />
<tr><td><label><b>Maths:  </b></label></td><td><input type="text" name="mm" value="<?php echo $mm; ?>"readonly /></td><td>/</td><td><input type="text" name="mm1" value="<?php echo $mm1;?>"readonly />
<tr><td><label><b>PCM %:  </b></label></td><td><input type="text" name="pcm" value="<?php echo $pcm; ?>"readonly /> </td></tr>
<tr><td><label><b>Total Marks Obtained : </b></label></td><td><input type="text" name="x1mo" value="<?php echo $x1mo; ?>" readonly /></td></tr>
<tr><td><label><b>Total Marks :    </b></label></td><td><input type="text" name="x1tm" value="<?php echo $x1tm; ?>" readonly /></td></tr>

<tr><td><label><b>Percentage :     </b></label></td><td><input type="text" name="x1p" value="<?php echo round($x1p,2); ?>" readonly /></td></tr>

<tr><td><label><b>JEE MAIN MARKS:    </b></label></td>

<tr><td><label><b>Physics:  </b></label></td><td><input type="text" name="jpm" value="<?php echo $jpm; ?>"readonly /> </td></tr>
<tr><td><label><b>Chemistry:  </b></label></td><td><input type="text" name="jcm" value="<?php echo $jcm; ?>"readonly /> </td></tr>
<tr><td><label><b>Maths:  </b></label></td><td><input type="text" name="jmm" value="<?php echo $jmm; ?>"readonly /> </td></tr>
<tr><td><label><b>Total Score:  </b></label></td><td><input type="text" name="jts" value="<?php echo $jts; ?>"readonly /> </td></tr>

</table>
</br>
</br>
<h3><u><b>List of documents required for verification</b></u></h3>
<input type="checkbox" name="box1" id="orc"/><label><b>Original Rank Card</b></label><br><br>
<input type="checkbox" name="box2" id="ors"/><label><b>Original online registration slip</b></label><br><br>
<input type="checkbox" name="box3" id="bc"/><label><b>H.S.C or any other relevant certificate showing the date of birth</b></label><br><br>
<input type="checkbox" name="box4" id="pcmc"/><label><b>10+2 Pass Certificate or Mark Sheet</b></label><br><br>
<input type="checkbox" name="box5" id="slc"/><label><b>School Leaving/ College Leaving Certificate</b></label><br><br>
<input type="checkbox" name="box6" id="rc"/><label><b>Original 'Resident of Odisha' Certificate/ Nativity Certificate from concerned Tahasildar</b></label><br><br>
<input type="checkbox" name="box7" id="scc" checked readonly onclick="return false" onkeydown="return false"/><label><b>Original SC Certificate by birth</b></label><br><br>
<input type="checkbox" name="box8" id="stc" disabled /><label><b>Original ST Certificate by birth</b></label><br><br>
<input type="checkbox" name="box9" id="es" /><label><b>Original Certificate of Ex-servicemen</b></label><br><br>
<input type="checkbox" name="box10" id="gc"/><label><b>Original Green Card issued by Family Welfare Department of Odisha</b></label><br><br>
<input type="checkbox" name="box11" id="pc"/><label><b>Disability certificate from the competent authority of Govt.Of Odisha not below the rank of CDMO</b></label><br><br>
<input type="checkbox" name="box12" id="ol"/><label><b>Original Certificate in support of Outlying Odia Speaking Tract(OL)</b></label><br><br>
<input type="checkbox" name="box13" id="tfw"/><label><b>Income Certificate for TFW candidate.</b></label><br><br>
<input type="checkbox" name="box14" id="ord"/><label><b>Other relevant document(s) if any</b></label><br><br>
<br>

<h3><u><b>Choose Branch Preference</b></u></h3>
Choice 1:<select name="choice1" style="width:170px;">
<option value="<?php echo $choice1;?>" readonly ><?php echo $text1;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 2:<select name="choice2" style="width:170px;">
<option value="<?php echo $choice2;?>" readonly ><?php echo $text2;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 3:<select name="choice3" style="width:170px;">
<option value="<?php echo $choice3;?>" readonly ><?php echo $text3;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 4:<select name="choice4" style="width:170px;">
<option value="<?php echo $choice4;?>" readonly ><?php echo $text4;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 5:<select name="choice5" style="width:170px;">
<option value="<?php echo $choice5;?>" readonly ><?php echo $text5;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select><br/><br/>
Choice 6:<select  name="choice6" style="width:170px;">
<option value="<?php echo $choice6;?>" readonly ><?php echo $text6;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 7:<select  name="choice7" style="width:170px;">
<option value="<?php echo $choice7;?>" readonly ><?php echo $text7;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 8:<select  name="choice8" style="width:170px;">
<option value="<?php echo $choice8;?>" readonly ><?php echo $text8;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 9:<select  name="choice9" style="width:170px;">
<option value="<?php echo $choice9;?>" readonly ><?php echo $text9;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
Choice 10:<select  name="choice10" style="width:170px;">
<option value="<?php echo $choice10;?>" readonly ><?php echo $text10;?></option>
<option>select</option>
<option value="CSETFW">Computer Science and Engineering(TFW)</option>
<option value="CSE">Computer Science and Engineering</option>
<option value="Computer Engg(TFW)">Computer Engineering(TFW)</option>
<option value="Computer Engg">Computer Engineering</option>
<option value="EEETFW">Electrical & Electronics Engineering(TFW)</option>
<option value="EEE">Electrical & Electronics Engineering</option>
<option value="ETCTFW">Electronics & Telecommunication Engineering(TFW)</option>
<option value="ETC">Electronics & Telecommunication Engineering</option>
<option value="ITTFW">Information Technology(TFW)</option>
<option value="IT">Information Technology</option>
</select>
<br><br>
<button  type="submit" onclick=mytoggle()>Print and Save</button>
<script>
function mytoggle() {
	if(document.getElementById("ol").checked)
	{
    document.getElementById("rc").disabled = true;
	document.getElementById("scc").disabled = true;
	document.getElementById("es").disabled = true;
	document.getElementById("gc").disabled = true;
	document.getElementById("pc").disabled = true;
	document.getElementById("tfw").disabled = true;
	}
	else 
		if(!document.getElementById("rc").checked)
	{
	document.getElementById("scc").disabled = true;	
	document.getElementById("es").disabled = true;
	document.getElementById("gc").disabled = true;
	document.getElementById("pc").disabled = true;
	document.getElementById("tfw").disabled = true;
	}
}
</script>
</form>
<form action="app.php" method="post">
<input type="submit" value="RETURN"/>
</form>
<form id="formSC" >
<input type="button" name="print" value="print&save" onclick="myactionSC('vslip.php')">
<input type="button" name="preview" value="preview" onclick="myactionSC('preview.php')">
</form>
<script>
function myactionSC(action)
{
	document.getElementById('formSC').action = action;
	document.getElementById('formSC').submit();
}
<?php } ?>
<?php } ?>
<?php } ?>
<?php echo "At least one of the field is empty..."; ?>
<a href="logout.php">Click here</a> to Logout.
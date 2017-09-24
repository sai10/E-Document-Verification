<?php
 echo "<body style='background-color:bisque'>";
 ?>

<?php
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
	$xp=$_POST["xp"];
	
	$pm=$_POST["pm"];
	$cm=$_POST["cm"];
	$mm=$_POST["mm"];
	$pm1=$_POST["pm1"];
	$cm1=$_POST["cm1"];
	$mm1=$_POST["mm1"];
	$x1mo=$_POST["x1mo"];
	$x1tm=$_POST["x1tm"];
	$pcm=$_POST["pcm"];
	$x1p=$_POST["x1p"];
	
	$jpm=$_POST["jpm"];
	$jcm=$_POST["jcm"];
	$jmm=$_POST["jmm"];
	$jts=$_POST["jts"];
	
	$choice1=$_POST["choice1"];
	$choice2=$_POST["choice2"];
	$choice3=$_POST["choice3"];
	$choice4=$_POST["choice4"];
	$choice5=$_POST["choice5"];
	$choice6=$_POST["choice6"];
	$choice7=$_POST["choice7"];
	$choice8=$_POST["choice8"];
	$choice9=$_POST["choice9"];
	$choice10=$_POST["choice10"];
	
	//$box1 = $_POST["box1"];
	
	$ota="yes";
	
	if(isset($_POST["box1"])) { 
	$orc="yes";
	}
	else{
	$orc="no";
	 } 
	 
	 if(isset($_POST["box2"])) { 
	$ors="yes";
	}
	else{
	$ors="no";
	 } 
	 
	 if(isset($_POST["box3"])) { 
	$bc="yes";
	}
	else{
	$bc="no";
	 } 
	 
	 if(isset($_POST["box4"])) { 
	$pcmc="yes";
	}
	else{
	$pcmc="no";
	 } 
	 
	 if(isset($_POST["box5"])) { 
	$slc="yes";
	}
	else{
	$slc="no";
	 } 
	
	if(isset($_POST["box6"])) { 
	$rc="yes";
	}
	else{
	$rc="no";
	 } 
	 
	 if(isset($_POST["box7"])) { 
	$scc="yes";
	}
	else{
	$scc="no";
	 } 
	 
	 if(isset($_POST["box8"])) { 
	$stc="yes";
	}
	else{
	$stc="no";
	 } 
	 
	 if(isset($_POST["box9"])) { 
	$es="yes";
	}
	else{
	$es="no";
	 } 
	 
	 if(isset($_POST["box10"])) { 
	$gc="yes";
	}
	else{
	$gc="no";
	 } 
	 if(isset($_POST["box11"])) { 
	$pc="yes";
	}
	else{
	$pc="no";
	 } 
	 
	 if(isset($_POST["box12"])) { 
	$ol="yes";
	$rc="no";
	$ur="no";
	$urw="no";
	$sc="no";
	$scw="no";
	$st="no";
	$stw="no";
	$es="no";
	$esw="no";
	$gc="no";
	$gcw="no";
	$pc="no";
	$pcw="no";
	$tfw="no";
	$ota="yes";
	}
	else{
	$ol="no";
	 } 
	 
	 if(isset($_POST["box13"])) { 
	$tfw="yes";
	}
	else{
	$tfw="no";
	 } 
	 
    if(isset($_POST["box14"])) { 
	$ord="yes";
	}
	 else{ 
	     $ord="no";
	    } 
	
?>

<form action="vslip.php" method="post">
<table>
<tr><td><label><b>Application ID: </b></label></td><td><?= $aid ?></td></tr>
<tr><td><label><b>Name :</b><label></td><td><?= $name ?></td></tr>
<tr><td><label><b>Gender :</b></label></td><td><?=$gender?></td></tr>
<tr><td><label><b>Date of Birth :</b></label></td><td><?=$bdate.'/'.$month.'/'.$year?></td></tr>
<tr><td><label><b>JEE Roll No. :</b></label></td><td><?=$jrn?></td></tr>
<tr><td><label><b>Category :</b></label></td><td><?=$cat?></td></tr>

<tr><td><label><b>X TH MARKS:       </b></label></td></tr>
<tr><td><label><b>Total Marks Obtained :</b></label></td><td><?=$xmo?></td></tr>
<tr><td><label><b>Total Marks :</b></label></td><td><?=$xtm?></td></tr>
<tr><td><label><b>Prcentage :</b></label></td><td><?=$xp?></td></tr>

<tr><td><label><b>XII TH MARKS :</b></label></td></tr>
<tr><td><label><b>Physics :</b></label></td><td><?=$pm?></td></tr>
<tr><td><label><b>Chemistry :</b></label></td><td><?=$cm?></td></tr>
<tr><td><label><b>MAthematics :</b></label></td><td><?=$mm?></td></tr>
<tr><td><label><b>PCM% :</b></label></td><td><?=$pcm?></td></tr>
<tr><td><label><b>Total Marks Obtained :</b></label></td><td><?=$x1mo?></td></tr>
<tr><td><label><b>Total Marks :</b></label></td><td><?=$x1tm?></td></tr>
<tr><td><label><b>Percentage :</b></label></td><td><?=$x1p?></td></tr>

<tr><td><label><b>JEE MAIN Marks :</b></label></td></tr>
<tr><td><label><b>Physics :</b></label></td><td><?=$jpm?></td></tr>
<tr><td><label><b>Chemistry :</b></label></td><td><?=$jcm?></td></tr>
<tr><td><label><b>Mathematics :</b></label></td><td><?=$jmm?></td></tr>
<tr><td><label><b>Total Score :</b></label></td><td><?=$jts?></td></tr>

<tr><td><label><u><b>LIST OF DOCUMENTS VERIFIED :</b></u></label></td></tr>

<?php
if($orc == "yes" && $_POST["box1"] == "on" )
{
?>
	<tr><td>- Original Rank Card</td></tr>
<?php
}

if($ors=="yes" && $_POST["box2"] == "on")
{
?>
	<tr><td>- Original online registration slip</td></tr>
<?php
}

if($bc=="yes" && $_POST["box3"] == "on")
{
?>
	<tr><td>- H.S.C or any other relevant certificate showing the date of birth</td></tr>
<?php
}

if($pcmc=="yes" && $_POST["box4"] == "on")
{
?>
	<tr><td>- 10+2 Pass Certificate or Mark Sheet</td></tr>
<?php
}

if($slc=="yes" && $_POST["box5"] == "on")
{
?>
	<tr><td>- School Leaving/ College Leaving Certificate</td></tr>
<?php
}

if($rc=="yes" && $_POST["box6"] == "on")
{
?>
	<tr><td>- Original 'Resident of Odisha' Certificate/ Nativity Certificate from concerned Tahasildar</td></tr>
<?php
}

if($scc=="yes" && $_POST["box7"] == "on")
{
?>
	<tr><td>- Original SC Certificate by birth</td></tr>
<?php
}
if($stc=="yes" && $_POST["box8"] == "on")
{
?>
	<tr><td>- Original ST Certificate by birth</td></tr>
<?php
}
if($es=="yes" && $_POST["box9"] == "on")
{
?>	
	<tr><td>- Original Certificate of Ex-servicemen</td></tr>
<?php
}
if($gc=="yes" && $_POST["box10"] == "on")
{
?>
	<tr><td>- Original Green Card issued by Family Welfare Department of Odisha</td></tr>
<?php
}

if($pc=="yes" && $_POST["box11"] == "on")
{
?>
	<tr><td>- Disability certificate from the competent authority of Govt.Of Odisha not below the rank of CDMO</td></tr>
<?php
}
if($ol=="yes" && $rc=="no" && $ur=="no" &&  $urw=="no" && $sc=="no" &&  $scw=="no" && $st=="no" && $stw=="no" && $es== "no" && $esw="no" && $gc="no" && $gcw="no" && $pc="no" && $pcw=="no" && $tfw=="no" && $ota=="yes" && $_POST["box12"] == "on")
{
?>
	<tr><td>- Original Certificate in support of Outlying Odia Speaking Tract(OL)</td></tr>
<?php
}

if($tfw=="yes" && $_POST["box13"] == "on")
{
?>
	<tr><td>- Income Certificate for TFW candidate.</td></tr>
<?php
}
if($ord=="yes" && $_POST["box14"] == "on")
{
?>
	<tr><td>- Other relevant document(s)</td></tr>
<?php
}
?>

<tr><td><label><u><b>CHOSEN BRANCH PREFERENCE :</b></u></label></td></tr>
<?php
if(isset($choice1) && $choice1!="Select")
{
?>
	<tr><td><label><b>CHOICE 1 :</b></label></td><td><?=$choice1?></td></tr>
<?php
}
if(isset($choice1) && isset($choice2) && $choice2!="Select")
{
?>
	<tr><td><label><b>CHOICE 2 :</b></label></td><td><?=$choice2?></td></tr>
<?php
}
if(isset($choice1) && isset($choice2) && isset($choice3) && $choice3!="Select")
{
?>
	<tr><td><label><b>CHOICE 3 :</b></label></td><td><?=$choice3?></td></tr>
<?php
}

if(isset($choice1) && isset($choice2) && isset($choice3) && isset($choice4) && $choice4!="Select")
{
?>
	<tr><td><label><b>CHOICE 4 :</b></label></td><td><?=$choice4?></td></tr>
<?php
}

if(isset($choice1) && isset($choice2) && isset($choice3) && isset($choice4) && isset($choice5) && $choice5!="Select")
{
?>
	<tr><td><label><b>CHOICE 5 :</b></label></td><td><?=$choice5?></td></tr>
<?php
}

if(isset($choice1) && isset($choice2) && isset($choice3) && isset($choice4) && isset($choice5) && isset($choice6) && $choice6!="Select")
{
?>
	<tr><td><label><b>CHOICE 6 :</b></label></td><td><?=$choice6?></td></tr>
<?php
}

if(isset($choice1) && isset($choice2) && isset($choice3) && isset($choice4) && isset($choice5) && isset($choice6) && isset($choice7) && $choice7!="Select")
{
?>
	<tr><td><label><b>CHOICE 7 :</b></label></td><td><?=$choice7?></td></tr>
<?php
}
if(isset($choice1) && isset($choice2) && isset($choice3) && isset($choice4) && isset($choice5) && isset($choice6) && isset($choice7) && isset($choice8) && $choice8!="Select")
{
?>
	<tr><td><label><b>CHOICE 8 :</b></label></td><td><?=$choice8?></td></tr>
<?php
}
if(isset($choice1) && isset($choice2) && isset($choice3) && isset($choice4) && isset($choice5) && isset($choice6) && isset($choice7) && isset($choice8) && isset($choice9) && $choice9!="Select")
{
?>
	<tr><td><label><b>CHOICE 9 :</b></label></td><td><?=$choice9?></td></tr>
<?php
}
if(isset($choice1) && isset($choice2) && isset($choice3) && isset($choice4) && isset($choice5) && isset($choice6) && isset($choice7) && isset($choice8) && isset($choice9) && isset($choice10) && $choice10!="Select")
{
?>
    <tr><td><label><b>CHOICE 10 :</b></label></td><td><?=$choice10?></td></tr>
<?php
}
?>
</table>


</form>
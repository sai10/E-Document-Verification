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
	
	
	date_default_timezone_set("Asia/Calcutta");
	$time=date("h:i:sa");
	$date=date("d-m-Y");
	
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	
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

	if($cat=="General"){
        $ur="yes";
            if($gender=="Female"){
                $urw="yes";
			}
			else{
				$urw="no";
			}
			}
			else{
				$ur="no";
				$urw="no";
			}
	
		
    if(isset($_POST["box7"])){
		$ur="yes";
		if($gender=="Female"){
			$scw="yes";
			$urw="yes";
		}
		else{
			$scw="no";
			$urw="no";
		}
	}
	else{
		$scw="no";
	}
		
		if(isset($_POST["box8"])){
			$ur="yes";
		if($gender=="Female"){
			$stw="yes";
			$urw="yes";
		}
		else{
			$stw="no";
			$urw="no";
		}
	}
	else{
		$stw="no";
	}
	
	if(isset($_POST["box9"])){
		if($gender=="Female"){
			$esw="yes";
		}
		else{
			$esw="no";
		}
	}
	else{
		$esw="no";
	}
	
	if(isset($_POST["box10"])){
		if($gender=="Female"){
			$gcw="yes";
		}
		else{
			$gcw="no";
		}
	}
	else{
		$gcw="no";
	}
	if(isset($_POST["box11"])){
		if($gender=="Female"){
			$pcw="yes";
		}
		else{
			$pcw="no";
		}
	}
	else{
		$pcw="no";
	}
		
	if(!isset($_POST["box6"]))
	{
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
	
	if(($tfw=="yes") ||($tfw=="no"))
	{
		if(($choice2==null)||($choice2=="select"))
		{
			$choice2=$choice1;
			$choice3=$choice1;
			$choice4=$choice1;
			$choice5=$choice1;
			$choice6=$choice1;
			$choice7=$choice1;
			$choice8=$choice1;
			$choice9=$choice1;
			$choice10=$choice1;
			
		}
		else if(($choice3==null)||($choice3=="select"))
		{
			$choice3=$choice2;
			$choice4=$choice2;
			$choice5=$choice2;
			$choice6=$choice2;
			$choice7=$choice2;
			$choice8=$choice2;
			$choice9=$choice2;
			$choice10=$choice2;
		}
		else if(($choice4==null)||($choice4=="select"))
		{
			$choice4=$choice3;
			$choice5=$choice3;
			$choice6=$choice3;
			$choice7=$choice3;
			$choice8=$choice3;
			$choice9=$choice3;
			$choice10=$choice3;
		}
		else if(($choice5==null)||($choice5=="select"))
		{
			$choice5=$choice4;
			$choice6=$choice4;
			$choice7=$choice4;
			$choice8=$choice4;
			$choice9=$choice4;
			$choice10=$choice4;
		}
		else if(($choice6==null)||($choice6=="select"))
		{
			$choice6=$choice5;
			$choice7=$choice5;
			$choice8=$choice5;
			$choice9=$choice5;
			$choice10=$choice5;
		}
		else if(($choice7==null)||($choice7=="select"))
		{
			$choice7=$choice6;
			$choice8=$choice6;
			$choice9=$choice6;
			$choice10=$choice6;
		}
		else if(($choice8==null)||($choice8=="select"))
		{
			$choice8=$choice7;
			$choice9=$choice7;
			$choice10=$choice7;
		}
		else if(($choice9==null)||($choice9=="select"))
		{
			$choice9=$choice8;
			$choice10=$choice8;
		}
		else if(($choice10==null)||($choice10=="select"))
		{
			$choice10=$choice9;
		}
	}
	 
	$arr=array($aid,$name,$gender,$bdate,$month,$year,$jrn,$cat,$orc,$ors,$bc,$pcmc,$slc,$choice1,$choice2,$choice3,$choice4,$choice5,$choice6,$choice7,$choice8,$choice9,$choice10,$rc,$ota,$ur,$urw,$scc,$scw,$stc,$stw,$es,$esw,$gc,$gcw,$pc,$pcw,$ol,$tfw,$ord,$xmo,$xtm,$xp,$pm,$cm,$mm,$pcm,$x1mo,$x1tm,$x1p,$jpm,$jcm,$jmm,$jts,$pm1,$mm1,$cm1,$date,$time,$ipaddress);
		
			/*if($tfw=="no")
		{
			$arr[18]=$arr[13];
			$arr[19]=$arr[14];
			$arr[20]=$arr[15];
			$arr[21]=$arr[16];
			$arr[22]=$arr[17];
		}*/
		$fp=fopen('studentdetails.csv','a');
		
			fputcsv($fp,$arr);
			
			fclose($fp);
			
//Edit done Here			
require('C:\wamp\www\docverify\fpdf17\fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('times','',10);
$pdf->Write(5,'Verification Slip');
$pdf->Cell(5);
$pdf->Write(5,'Verification Date: '.$date);
$pdf->Cell(5);
$pdf->Write(5,'Verification Time: '.$time);
$pdf->Cell(5);
$pdf->Write(5,'Verified at: '.$ipaddress);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Candidate Copy');
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Name:  '.$name);
$pdf->Ln();
$pdf->Write(5,'ID: '.$aid);
$pdf->Ln();
$pdf->Write(5,'Gender:  '.$gender);
$pdf->Ln();
$pdf->Write(5,'DOB:  '.$bdate."-".$month."-".$year);
$pdf->Ln();
$pdf->Write(5,'JEE ROLL NO:  '.$jrn);
$pdf->Ln();
$pdf->Write(5,'Category:  '.$cat);
$pdf->Ln();
$pdf->Write(5,'Odisha Domicile: '.$rc);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Submitted Documents:');
$pdf->Ln();
if(isset($_POST["box1"]))
{$pdf->Write(5,'Original Rank Card');
$pdf->Ln();}
if(isset($_POST["box2"]))
{$pdf->Write(5,'Original online registration slip');
$pdf->Ln();}
if(isset($_POST["box3"]))
{$pdf->Write(5,'H.S.C or any other relevant certificate showing the date of birth.');
$pdf->Ln();}
if(isset($_POST["box4"]))
{$pdf->Write(5,'10+2 Pass Certificate or Marksheet.');
$pdf->Ln();}
if(isset($_POST["box5"]))
{$pdf->Write(5,'School Leaving/College Leaving Certificate.');
$pdf->Ln();}
if(isset($_POST["box6"]))
{$pdf->Write(5,'Original Resident of Odisha Certificate/Nativity Certificate from concerned Tahsildar.');
$pdf->Ln();}
if(isset($_POST["box7"]))
{$pdf->Write(5,'Original SC Certificate by birth');
$pdf->Ln();}
if(isset($_POST["box8"]))
{$pdf->Write(5,'Original ST Certificate by birth.');
$pdf->Ln();}
if(isset($_POST["box9"]))
{$pdf->Write(5,'Original Certificate of Ex-servicemen.');
$pdf->Ln();}
if(isset($_POST["box10"]))
{$pdf->Write(5,'Original Green Card issued by Family Welfare Department of Odisha.');
$pdf->Ln();}
if(isset($_POST["box11"]))
{$pdf->Write(5,'Disability certificate from the competent authority of Govt.Of Odisha not below the rank of CDMO.');
$pdf->Ln();}
if(isset($_POST["box12"]))
{$pdf->Write(5,'Original Certificate in support of Outlying Odia Speaking Tract(OL).');
$pdf->Ln();}
if(isset($_POST["box13"]))
{$pdf->Write(5,'Income Certificate for TFW.');
$pdf->Ln();}
if(isset($_POST["box14"]))
$pdf->Write(5,'Other relevant document(s).');
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Discipline Choice in the order of preference');
$pdf->Ln();
$pdf->Write(5,'1: '.$arr[13]);
$pdf->Cell(10);
$pdf->Write(5,'2: '.$arr[14]);
$pdf->Cell(10);
$pdf->Write(5,'3: '.$arr[15]);
$pdf->Cell(10);
$pdf->Write(5,'4: '.$arr[16]);
$pdf->Cell(10);
$pdf->Write(5,'5: '.$arr[17]);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'6: '.$arr[18]);
$pdf->Cell(10);
$pdf->Write(5,'7: '.$arr[19]);
$pdf->Cell(10);
$pdf->Write(5,'8: '.$arr[20]);
$pdf->Cell(10);
$pdf->Write(5,'9: '.$arr[21]);
$pdf->Cell(10);
$pdf->Write(5,'10: '.$arr[22]);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'XTH MARKS:');
$pdf->Ln();
$pdf->Write(5,'Total marks obtained: '.$xmo);
$pdf->Cell(5);
$pdf->Write(5,'Total marks: '.$xtm);
$pdf->Cell(5);
$pdf->Write(5,'Percentage: '.$xp);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'XIITH MARKS:');
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Physics: '.$pm);
$pdf->Cell(2);
$pdf->Write(5,'/');
$pdf->Cell(2);
$pdf->Write(5,$pm1);
$pdf->Ln();
$pdf->Write(5,'Maths: '.$mm);
$pdf->Cell(2);
$pdf->Write(5,'/');
$pdf->Cell(2);
$pdf->Write(5,$mm1);
$pdf->Ln();
$pdf->Write(5,'Chemistry: '.$cm);
$pdf->Cell(2);
$pdf->Write(5,'/');
$pdf->Cell(2);
$pdf->Write(5,$cm1);
$pdf->Ln();
$pdf->Write(5,'PCM %:'.$pcm);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Total marks obtained: '.$x1mo);
$pdf->Cell(5);
$pdf->Write(5,'Total marks: '.$x1tm);
$pdf->Cell(5);
$pdf->Write(5,'Percentage: '.$x1p);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'JEE MAIN MARKS:');
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Physics: '.$jpm);
$pdf->Cell(5);
$pdf->Write(5,'Chemistry: '.$jcm);
$pdf->Cell(5);
$pdf->Write(5,'Maths: '.$jmm);
$pdf->Ln();
$pdf->Write(5,'Total Score: '.$jts);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Full signature of the candidate');
$pdf->Cell(90);
$pdf->Write(5,'Signature of the verifying officer');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->Write(5,'Verification Slip');
$pdf->Cell(5);
$pdf->Write(5,'Verification Date: '.$date);
$pdf->Cell(5);
$pdf->Write(5,'Verification Time: '.$time);
$pdf->Cell(5);
$pdf->Write(5,'Verified at: '.$ipaddress);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Institute Copy');
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Name:  '.$name);
$pdf->Ln();
$pdf->Write(5,'ID: '.$aid);
$pdf->Ln();
$pdf->Write(5,'Gender:  '.$gender);
$pdf->Ln();
$pdf->Write(5,'DOB:  '.$bdate."-".$month."-".$year);
$pdf->Ln();
$pdf->Write(5,'JEE ROLL NO:  '.$jrn);
$pdf->Ln();
$pdf->Write(5,'Category:  '.$cat);
$pdf->Ln();
$pdf->Write(5,'Odisha Domicile: '.$rc);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Submitted Documents:');
$pdf->Ln();
if(isset($_POST["box1"]))
{$pdf->Write(5,'Original Rank Card');
$pdf->Ln();}
if(isset($_POST["box2"]))
{$pdf->Write(5,'Original online registration slip');
$pdf->Ln();}
if(isset($_POST["box3"]))
{$pdf->Write(5,'H.S.C or any other relevant certificate showing the date of birth.');
$pdf->Ln();}
if(isset($_POST["box4"]))
{$pdf->Write(5,'10+2 Pass Certificate or Marksheet.');
$pdf->Ln();}
if(isset($_POST["box5"]))
{$pdf->Write(5,'School Leaving/College Leaving Certificate.');
$pdf->Ln();}
if(isset($_POST["box6"]))
{$pdf->Write(5,'Original Resident of Odisha Certificate/Nativity Certificate from concerned Tahsildar.');
$pdf->Ln();}
if(isset($_POST["box7"]))
{$pdf->Write(5,'Original SC Certificate by birth');
$pdf->Ln();}
if(isset($_POST["box8"]))
{$pdf->Write(5,'Original ST Certificate by birth.');
$pdf->Ln();}
if(isset($_POST["box9"]))
{$pdf->Write(5,'Original Certificate of Ex-servicemen.');
$pdf->Ln();}
if(isset($_POST["box10"]))
{$pdf->Write(5,'Original Green Card issued by Family Welfare Department of Odisha.');
$pdf->Ln();}
if(isset($_POST["box11"]))
{$pdf->Write(5,'Disability certificate from the competent authority of Govt.Of Odisha not below the rank of CDMO.');
$pdf->Ln();}
if(isset($_POST["box12"]))
{$pdf->Write(5,'Original Certificate in support of Outlying Odia Speaking Tract(OL).');
$pdf->Ln();}
if(isset($_POST["box13"]))
{$pdf->Write(5,'Income Certificate for TFW.');
$pdf->Ln();}
if(isset($_POST["box14"]))
$pdf->Write(5,'Other relevant document(s).');
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Discipline Choice in the order of preference');
$pdf->Ln();
$pdf->Write(5,'1: '.$arr[13]);
$pdf->Cell(10);
$pdf->Write(5,'2: '.$arr[14]);
$pdf->Cell(10);
$pdf->Write(5,'3: '.$arr[15]);
$pdf->Cell(10);
$pdf->Write(5,'4: '.$arr[16]);
$pdf->Cell(10);
$pdf->Write(5,'5: '.$arr[17]);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'6: '.$arr[18]);
$pdf->Cell(10);
$pdf->Write(5,'7: '.$arr[19]);
$pdf->Cell(10);
$pdf->Write(5,'8: '.$arr[20]);
$pdf->Cell(10);
$pdf->Write(5,'9: '.$arr[21]);
$pdf->Cell(10);
$pdf->Write(5,'10: '.$arr[22]);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'XTH MARKS:');
$pdf->Ln();
$pdf->Write(5,'Total marks obtained: '.$xmo);
$pdf->Cell(5);
$pdf->Write(5,'Total marks: '.$xtm);
$pdf->Cell(5);
$pdf->Write(5,'Percentage: '.$xp);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'XIITH MARKS:');
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Physics: '.$pm);
$pdf->Cell(2);
$pdf->Write(5,'/');
$pdf->Cell(2);
$pdf->Write(5,$pm1);
$pdf->Ln();
$pdf->Write(5,'Maths: '.$mm);
$pdf->Cell(2);
$pdf->Write(5,'/');
$pdf->Cell(2);
$pdf->Write(5,$mm1);
$pdf->Ln();
$pdf->Write(5,'Chemistry: '.$cm);
$pdf->Cell(2);
$pdf->Write(5,'/');
$pdf->Cell(2);
$pdf->Write(5,$cm1);
$pdf->Ln();
$pdf->Write(5,'PCM %:'.$pcm);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Total marks obtained: '.$x1mo);
$pdf->Cell(5);
$pdf->Write(5,'Total marks: '.$x1tm);
$pdf->Cell(5);
$pdf->Write(5,'Percentage: '.$x1p);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'JEE MAIN MARKS:');
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Physics: '.$jpm);
$pdf->Cell(5);
$pdf->Write(5,'Chemistry: '.$jcm);
$pdf->Cell(5);
$pdf->Write(5,'Maths: '.$jmm);
$pdf->Ln();
$pdf->Write(5,'Total Score: '.$jts);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,'Full signature of the candidate');
$pdf->Cell(90);
$pdf->Write(5,'Signature of the verifying officer');

$fileext=".pdf";
$filename=$arr[0].$fileext;
$dir="C:/wamp/www/docverify/docverification/verification_slips/";
$pdf->Output($dir.$filename,'F');
$pdf->output($filename,'D');
?>
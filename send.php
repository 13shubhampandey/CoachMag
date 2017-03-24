<?php
/*$info = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Ld6ggMTAAAAAOiwUp76lhRICJuQewYnVDYeV2sB&response=".$_REQUEST['g-recaptcha-response']);
$response = json_decode($info,true);
//print '<br>B'.$obj['success'];

if($_REQUEST['g-recaptcha-response'] == "")
{
	header('location:error.html');
	exit;
}
if($response['success'] && isset($_POST['Submit_audi']))
{

*/

if(isset($_POST['Submit_audi']) == "")
{
//echo "ravi";
//exit;
header('location:error.html');
} else{
	
$msg="<table width='90%' border='0' cellpadding='1' cellspacing='5'>
<tr>
  <td colspan='3' align='center'><img src='http://alpha.extramarks.com/newsletter/audikautilya/images/logo.png'><h3> Enquiry Form<br>
    <br>
    </h3></td></tr>
                	<tr>
                   	  <td width='32%' bgcolor='#D9D9D9'><strong>Name</strong></td>
                      <td width='31%' bgcolor='#D9D9D9'>&nbsp;</td>
                      <td width='37%' bgcolor='#D9D9D9'><strong>Class</strong></td>
                  </tr>
                	<tr style='border-bottom:1px solid #ccc;'>
                	  <td>$_POST[Name]</td>
                	  <td>&nbsp;</td>
                	  <td>$_POST[Class]</td>
           	      </tr>
                	<tr>
                	  <td bgcolor='#D9D9D9'><strong>School</strong></td>
                	  <td bgcolor='#D9D9D9'>&nbsp;</td>
                	  <td bgcolor='#D9D9D9'><strong>Board</strong></td>
           	      </tr>
                	<tr style='border-bottom:1px solid #ccc;'>
                	  <td>$_POST[School]</td>
                	  <td>&nbsp;</td>
                	  <td>CBSE</td>
           	      </tr>
                	<tr>
                	  <td bgcolor='#D9D9D9'><strong>Choose Stream</strong></td>
                	  <td bgcolor='#D9D9D9'>&nbsp;</td>
                	  <td bgcolor='#D9D9D9'><strong>Subjects of Interest</strong></td>
              	  </tr>
                	<tr>
                	  <td> $_POST[Math]<br>
$_POST[Science]<br>
$_POST[Science1]<br>
$_POST[Commerce1]</td>
                	  <td>&nbsp;</td>
                	  <td>$_POST[Mathematics]<br>
$_POST[Physics]<br>
$_POST[Chemistry]<br>$_POST[Biology]</td>
              	  </tr>
                	<tr>
                	  <td colspan='3' bgcolor='#D9D9D9'><strong>Choose Target Exam</strong></td>
               	  </tr>
                	<tr>
                	  <td colspan='3'>$_POST[CBSEBoard]<br>
               	      $_POST[IITJEE]<br>
               	      $_POST[BITSAT]<br>
               	      $_POST[OtherEnggEntrance]<br>
               	      $_POST[MedicalEntrance]<br>
               	      $_POST[NTSE]<br>
               	      $_POST[Olympiads]<br>
               	      $_POST[Others]</td>
               	  </tr>
                	<tr>
                	  <td bgcolor='#D9D9D9'><strong>Phone</strong></td>
                	  <td bgcolor='#D9D9D9'>&nbsp;</td>
                	  <td bgcolor='#D9D9D9'><strong>Email</strong></td>
              	  </tr>
                	<tr>
                	  <td>$_POST[Phone]</td>
                	  <td>&nbsp;</td>
                	  <td>$_POST[Email]</td>
              	  </tr>
                </table>";

//echo $msg;
//exit;
include("spamcheck.php");
if(CheckSpam(implode(" ", $_POST))){
	$toList = array('aadikautilya@gmail.com');
	//$toList = array('ravi@extramarks.com');

	$subj=":: Aadi Kautilya Enquiry Form ::";

	$headers .= "MIME-Version: 1.0\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\n"; 
	$headers .= "X-Priority: 1\n"; 
	$headers .= "X-MSMail-Priority: High\n"; 
	$headers .= "X-Mailer: PHP\n"; 
	$headers .= "From: Aadi Kautilya <info@aadikautilya.in>\n";

	foreach($toList as $to){
	  mail($to,$subj,$msg,$headers);
	}

}


header('location:thanks.html');
//exit;
//} else{
//	header('location:error.html');

}

?>

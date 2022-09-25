<?PHP
session_start();
ini_set('display_errors', 0);
$q_set=$_GET['q_set'];
if($_POST['hyperlink']=='reset')
{
	session_unset();
	session_start();
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Buzzer Round Questions List : <?PHP echo $q_set; ?></title> 
<link rel="shortcut icon" href="icon.jpg" type="image/jpg">
<link rel="icon" type="image/x-icon" href="icon.jpg"> 
<link href="/bootstrap.css" rel="stylesheet"> 
<script src="/jquery.min.js"></script>
</head>
<body >
<noscript>  
<p style="color:red;">
To be able to use this site correctly. You need to enable javascript in your browser.
</p>
</noscript>



<br>

  <div class="container">
 <br>
 
 <p style="font-size:40px" align="center">
 <i> <?PHP echo $q_set; ?> </i>
</p>

 
 <p style="font-size:50px" align="center">
  Buzzer Round Questions List
 
 <br><br>
 
  <div class="row">
 <?PHP
 $dir    = 'Quiz_List/'.$q_set.'/Buzzer_Round/';
$files = scandir($dir);

foreach ($files as $q_no){ 

if($q_no!=='.'&&$q_no!=='..') {
	?>
	 <div class="col-lg-2">
	<form method="get" action="/buzzer_round_question.php"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><input hidden value="<?PHP echo $q_no; ?>" name="q_no">
	
	<?PHP if($_SESSION['hyperlink'][$q_set]['Buzzer_Round'][$q_no]=='change') { ?>
	<button class="btn btn-danger btn-lg" type="submit">
	<?PHP } else { ?>
	<button class="btn btn-info btn-lg" type="submit">
	<?PHP } ?>
	
	<p style="font-size:30px" align="center">&nbsp;&nbsp;&nbsp;<?PHP echo $q_no; ?>&nbsp;&nbsp;&nbsp;</p></button></form>
	<br>
	</div>

	<?PHP
}
}
?>
</div>
 </p>
 
 <br>
<form method="get" action="/buzzer_round_rules.php"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><button class="btn btn-success btn-lg btn-block" type="submit">Buzzer Round Rules </button></form>
<br>
<form method="POST" action="/buzzer_round_list.php?q_set=<?PHP echo $q_set; ?>"><input hidden value="reset" name="hyperlink"><button class="btn btn-warning btn-lg btn-block" type="submit">Reset Hyperlink </button></form>
<br>
<form method="get" action="/rounds_list.php"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><button class="btn btn-primary btn-lg btn-block" type="submit">Back </button></form>
 </div>
 


<script src="/popper.min.js"></script>  
<script src="/bootstrap.min.js"></script>
</body>
</html>
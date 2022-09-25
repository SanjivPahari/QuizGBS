<?PHP
session_start();
ini_set('display_errors', 0);
$q_set=$_GET['q_set'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Buzzer Round Rules : <?PHP echo $q_set; ?></title> 
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
    Buzzer Round Rules
 </p>
 <br><br>
  <p style="font-size:30px" align="left">
 <?PHP
 echo nl2br(file_get_contents('Quiz_List/'.$q_set.'/Rules/buzzer_round_rules.txt'));
 
 ?>
 </p>
 
<br><br><br>
<form method="get" action="/buzzer_round_list.php"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><button class="btn btn-primary btn-lg btn-block" type="submit">Back </button></form>
 </div>
  <br>


<script src="/popper.min.js"></script>  
<script src="/bootstrap.min.js"></script>
</body>
</html>
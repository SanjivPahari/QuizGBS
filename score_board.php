<?PHP
session_start();
ini_set('display_errors', 0);
$q_set=$_GET['q_set'];
if(isset($_POST['update_score'])){
	file_put_contents('Quiz_List/'.$q_set.'/Score/score_trishuli.txt',$_POST['trishuli_score']);
	file_put_contents('Quiz_List/'.$q_set.'/Score/score_karnali.txt',$_POST['karnali_score']);
	file_put_contents('Quiz_List/'.$q_set.'/Score/score_seti.txt',$_POST['seti_score']);
	file_put_contents('Quiz_List/'.$q_set.'/Score/score_rapti.txt',$_POST['rapti_score']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Score Board : <?PHP echo $q_set; ?></title> 
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
    Score Board

 <br><br>
 
  <div class="row">
  
 <div class="col-lg-6">
 
<div class="card text-white bg-primary mb-6" >
  <div class="card-header"><p style="font-size:30px" align="center"> Trishuli : <?PHP echo file_get_contents('Quiz_List/'.$q_set.'/Score/score_trishuli.txt'); ?></p> </div>
  <div class="card-body">
  <?PHP 
  $contents=file_get_contents('Quiz_List/'.$q_set.'/Participants/trishuli.txt'); 
  $lines = explode("\n", $contents); 

foreach($lines as $word) {
    echo '<h4 class="card-title">'.$word.'</h4>';
}
  
  ?>
    
	</div>
  </div>
  <br>
</div>



 <div class="col-lg-6">
 
<div class="card text-white bg-danger mb-6" >
  <div class="card-header"><p style="font-size:30px" align="center"> Seti : <?PHP echo file_get_contents('Quiz_List/'.$q_set.'/Score/score_seti.txt'); ?></p> </div>
  <div class="card-body">
  <?PHP 
  $contents=file_get_contents('Quiz_List/'.$q_set.'/Participants/seti.txt'); 
  $lines = explode("\n", $contents); 

foreach($lines as $word) {
    echo '<h4 class="card-title">'.$word.'</h4>';
}
  
  ?>
    
	</div>
  </div>
  <br>
</div>



 <div class="col-lg-6">
 
<div class="card text-white bg-success mb-6" >
  <div class="card-header"><p style="font-size:30px" align="center"> Karnali : <?PHP echo file_get_contents('Quiz_List/'.$q_set.'/Score/score_karnali.txt'); ?></p> </div>
  <div class="card-body">
  <?PHP 
  $contents=file_get_contents('Quiz_List/'.$q_set.'/Participants/karnali.txt'); 
  $lines = explode("\n", $contents); 

foreach($lines as $word) {
    echo '<h4 class="card-title">'.$word.'</h4>';
}
  
  ?>
    
	</div>
  </div>
  
</div>


 <div class="col-lg-6">
 
<div class="card text-white bg-warning mb-6" >
  <div class="card-header"><p style="font-size:30px" align="center"> Rapti : <?PHP echo file_get_contents('Quiz_List/'.$q_set.'/Score/score_rapti.txt'); ?></p> </div>
  <div class="card-body">
  <?PHP 
  $contents=file_get_contents('Quiz_List/'.$q_set.'/Participants/rapti.txt'); 
  $lines = explode("\n", $contents); 

foreach($lines as $word) {
    echo '<h4 class="card-title">'.$word.'</h4>';
}
  
  ?>
    
	</div>
  </div>
  
</div>


</div>
 </p>
 
<br><br>
<form method="get" action="/set_score.php"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><button class="btn btn-danger btn-lg btn-block" type="submit" >Edit Score </button></form>
<br>
<form method="get" action="/rounds_list.php"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><button class="btn btn-primary btn-lg btn-block" type="submit">Back </button></form>
<br>
 </div>
 


<script src="/popper.min.js"></script>  
<script src="/bootstrap.min.js"></script>
</body>
</html>
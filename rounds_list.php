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
<title>Rounds List : <?PHP echo $q_set; ?></title> 
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
 Rounds List
 
 <br><br>
 
  <div class="row">
  
  
   <div class="col-lg-6">
  <div class="list-group card border-success">
  <a href="/general_round_list.php?q_set=<?PHP echo $q_set; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
    <p style="font-size:50px" align="center" class="text-success"> General Round </p>
  </a>
</div>
<br>
</div>

 <div class="col-lg-6">
  <div class="list-group card border-success">
  <a href="/buzzer_round_list.php?q_set=<?PHP echo $q_set; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
    <p style="font-size:50px" align="center" class="text-success"> Buzzer Round </p>
  </a>
</div>
<br>
</div>

 <div class="col-lg-6">
  <div class="list-group card border-success">
  <a href="/rapid_fire_list.php?q_set=<?PHP echo $q_set; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
    <p style="font-size:50px" align="center" class="text-success"> Rapid Fire Round </p>
  </a>
</div>
<br>
</div>

 <div class="col-lg-6">
  <div class="list-group card border-success">
  <a href="/audio_visual_list.php?q_set=<?PHP echo $q_set; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
    <p style="font-size:50px" align="center" class="text-success"> Audio Visual Round </p>
  </a>
</div>
</div>
<br>



</div>
 </p>
 
<br>
<form method="get" action="/participants.php"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><button class="btn btn-warning btn-lg btn-block" type="submit">Participants List </button></form>
<br>
<form method="get" action="/score_board.php"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><button class="btn btn-info btn-lg btn-block" type="submit">Scoreboard </button></form>
<br>
<form method="get" action="/edit_quiz.php"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><button class="btn btn-danger btn-lg btn-block" type="submit" onclick="return confirm('Are you sure?')">Edit Quiz </button></form>
<br>
<form method="get" action="/index.php"><button class="btn btn-primary btn-lg btn-block" type="submit">Back </button></form><br>
 </div>
 


<script src="/popper.min.js"></script>  
<script src="/bootstrap.min.js"></script>
</body>
</html>
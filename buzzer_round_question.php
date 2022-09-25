<?PHP
session_start();
ini_set('display_errors', 0);
$show_ans='hide';
if(isset($_GET['show_ans'])) {
	$show_ans=$_GET['show_ans'];
}
$q_set=$_GET['q_set'];
$q_no=$_GET['q_no'];

$_SESSION['hyperlink'][$q_set]['Buzzer_Round'][$q_no]='change';

$question=file_get_contents('Quiz_List/'.$q_set.'/General_Round/'.$q_no.'/question.txt');
$answer=file_get_contents('Quiz_List/'.$q_set.'/General_Round/'.$q_no.'/answer.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Buzzer Round Question : <?PHP echo $q_set; ?></title> 
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
  <br><br><br>
  
  
<p style="font-size:50px">
<?PHP echo $q_no.'. '; echo $question; ?>
<br><br>

<?PHP if ($show_ans=='show') { ?>
Ans: <a class="text-success" style="font-size:50px;">   <?PHP echo $answer; ?> </a>
<?PHP } ?>
</p>

<?PHP if ($show_ans=='hide') { ?>

<p style="font-size:50px" align="center" class="text-danger">
 Timer: <label id="minutes">00</label> min <label id="seconds">00</label> sec
 </p>
 
    <script type="text/javascript">
        var minutesLabel = document.getElementById("minutes");
var secondsLabel = document.getElementById("seconds");
var totalSeconds = 0;
setInterval(setTime, 1000);

function setTime() {
  ++totalSeconds;
  secondsLabel.innerHTML = pad(totalSeconds % 60);
  minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
}

function pad(val) {
  var valString = val + "";
  if (valString.length < 2) {
    return "0" + valString;
  } else {
    return valString;
  }
}
    </script>
	

<form method="get"><input hidden value="show" name="show_ans"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><input hidden value="<?PHP echo $q_no; ?>" name="q_no"><button class="btn btn-success btn-lg btn-block" type="submit">Show Answer !</button></form>
<?PHP } else { ?>
<form method="get"><input hidden value="hide" name="show_ans"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><input hidden value="<?PHP echo $q_no; ?>" name="q_no"><button class="btn btn-warning btn-lg btn-block" type="submit">Hide Answer !</button></form>
<?PHP } ?>
<br>

<br>

<form method="get" action="/buzzer_round_list.php"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><button class="btn btn-primary btn-lg btn-block" type="submit">Back </button></form>
 </div>
 


<script src="/popper.min.js"></script>  
<script src="/bootstrap.min.js"></script>
</body>
</html>
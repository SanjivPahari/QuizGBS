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
<title>Set Score : <?PHP echo $q_set; ?></title> 
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
    Set Score


<div class="card mb-3">
  <h3 class="card-header">Score Form</h3>
  <div class="card-body">
  
  <form method="post" action="/score_board.php?q_set=<?PHP echo $q_set; ?>">
  
  <div class="form-group">
  <label class="col-form-label col-form-label-lg text-primary">Trishuli</label>
  <input class="form-control form-control-lg" type="text" placeholder="Total score till now" name="trishuli_score">
</div>

  <div class="form-group">
  <label class="col-form-label col-form-label-lg text-danger">Seti</label>
  <input class="form-control form-control-lg" type="text" placeholder="Total score till now" name="seti_score">
</div>

  <div class="form-group">
  <label class="col-form-label col-form-label-lg text-success">Karnali</label>
  <input class="form-control form-control-lg" type="text" placeholder="Total score till now" name="karnali_score">
</div>

  <div class="form-group">
  <label class="col-form-label col-form-label-lg text-warning">Rapti</label>
  <input class="form-control form-control-lg" type="text" placeholder="Total score till now" name="rapti_score">
</div>

  <div class="form-group">
<button class="btn btn-success btn-lg btn-block" type="submit" name="update_score">Update Score </button>
</div>

</form>

  </div>

</div>


  
 

  




 </p>
 
<br><br><br>
<form method="get" action="/score_board.php"><input hidden value="<?PHP echo $q_set; ?>" name="q_set"><button class="btn btn-primary btn-lg btn-block" type="submit">Back </button></form>
<br>
 </div>
 


<script src="/popper.min.js"></script>  
<script src="/bootstrap.min.js"></script>
</body>
</html>
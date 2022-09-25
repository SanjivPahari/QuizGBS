
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>QUIZ GBS</title> 
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

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/index.php"> <img  src="icon.jpg" alt="Logo" width="50" height="50">  </a>


  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/index.php">QUIZ GBS</a>
    </div>
    <ul class="nav navbar-nav">
     
    </ul>
	
	
 <ul class="nav navbar-nav navbar-right">
              
                <li>
                    <div class="btn-nav"><button class="btn btn-warning navbar-btn" > Press F11 = Full Screen | Esc = Exit Full Screen</button> </div>
					 
                </li>
				&nbsp;&nbsp;
            </ul>
			
    </div>





</nav>

<br>

  <div class="container" align="center">
<h1> Welcome to Quiz Maker </h1>
<h3> List of Available Quizes: </h3>
<div class="list-group">
<?PHP
 $dir    = 'Quiz_List/';
$files = scandir($dir);

foreach ($files as $q_set){ 

if($q_set!=='.'&&$q_set!=='..') {
	?>
	
  <a href="/rounds_list.php?q_set=<?PHP echo $q_set; ?>" class="list-group-item list-group-item-action text-danger" ><?PHP echo $q_set; ?> |  Created: <?php echo date ("l, F d Y", filemtime('Quiz_List/'.$q_set)); ?>
  </a>
  
<?PHP } } ?>

</div>
<br>

 </div>
 
 <ol class="breadcrumb">
  <img src="developer.png" height="20" width="20"> &nbsp;&nbsp; DEVELOPED BY INFOTECH GANDAKI 2076  &nbsp; | &nbsp; <a href="about.php">ABOUT US</a>
  </ol>

<script src="/popper.min.js"></script>  
<script src="/bootstrap.min.js"></script>
</body>
</html>
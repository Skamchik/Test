<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		
	</div>
	<div class="row">
		<ul class="nav nav-pills">
  			<li role="presentation" class="active"><a href="index.php?menu=1">Toure</a></li>
 		 	<li role="presentation"><a href="index.php?menu=2">Feedback</a></li>
  			<li role="presentation"><a href="index.php?menu=3">Register</a></li>
		</ul>
	</div>
	<div class="row">
		<?php 
			if (isset($_GET["menu"])) {
				$menu=$_GET["menu"];
				if ($menu==1) {
					include_once ("pages/tours.php");
				}
				if ($menu==2) {
					include_once ("pages/feedback.php");
				}
				if ($menu==3) {
					include_once ("pages/register.php");
				}
			}
		 ?>
	</div>
</div>
	
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <style>
  	html, body {
  		height: 100%;
		width: 100%;
		margin: 0;
		padding: 0;
  	}
  	#fixedBar {
		position:fixed;
		display:block;
		width:100%;
		z-index: 10;
  	}
	#banner {
		display:block;
		width: 100%;
		height: 10%;
		background-color: gray;
		text-align: center;
	}
	#topbar {
		display: block;
		color:white;
		width: 100%;
		height: 5%;
		background-color: black;
		text-align: center;
		display:block;
		
	}
	
	#postBody {
		top:75px;
		position:relative;
	}
	
	body {
		background-color:black;
		background: url("h5DxFYx.jpg") no-repeat center center fixed;
		background-size:cover ;
		background-repeat: n;
		font-family: Verdana;
		background-attachment: fixed;

	}
	#postBorder{
		display: inline-block;
		background-color: rgba(0,0,0,0.70);
		margin-top:20px;
		margin-bottom:20px;
		padding:10px;
		border: 2px solid white;
		border-radius:2.5%;
		text-align: center;
		color:white;
	}
	img {
		width:100%;
	}
	.nav-pills>li.active>a {
	  color: black;
	  background-color: white
  	}
	.nav-pills>li.active>a:hover {
	  color: black;
	  background-color: white;
  	}
	
	.nav>li>a {
		color:white;
	}
	.nav-pills>li>a:focus, .nav-pills>li>a:hover {
		background-color:white;
		color:black;
	}
	p {
		font-size:12px;
	}
  </style>

</head>
<body class="img-responsive">
<div id="fixedBar">
	
	<div id="banner">
		<p>banner</p>
	</div>
	<div id="topbar">
	    <div class="container">
				<ul class="nav nav-pills red" role="tablist">
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="#">Photography</a></li>
				<li><a href="bootstrapInvoice.php">Invoice Form</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="www.linkedin.com/in/jessehoang/en">Linkedin</a></li>
						<li><a href="#">Email</a></li>
					</ul>
				</li>
				</ul>
	    </div>
	</div>
	
</div>

	<div class="container" id="postBody" >
		
	<div class="row" >
		<div class="col-xs-12" id="postBorder">
			<img src="GeqOOp6.jpg">
			<p>The View From Mt. Quimby</p>
		</div>
		
		<div class="col-xs-12" id="postBorder">
			<img src="IMG_3362.JPG">
			<p>The light is bright</p>
		</div>

	</div>
	</div>
</body>
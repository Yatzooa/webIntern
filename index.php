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
  	div {
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
	<div id="banner">
		<p>banner</p>
	</div>
	<div id="topbar">
	    <div class="container">
				<ul class="nav nav-pills red" role="tablist">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Math</a></li>
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
	<div class="container">
		
	<div class="row">
		<div class="col-xs-12" id="postBorder">
			<img src="http://i.imgur.com/GeqOOp6.jpeg">
			<p>The View From Mt. Quimby</p>
		</div>
		
		<div class="col-xs-6" id="postBorder">
			<img src="IMG_3362.JPG">
			<p>The light is bright</p>
		</div>
		<div class="col-xs-6" id="postBorder">
			<blockquote>
				<p>“Next,” said I, “compare our nature in respect of education and its lack to such an
experience as this. Picture men dwelling in a sort of subterranean cavern with a
long entrance open to the light on its entire width. Conceive them as having their
legs and necks fettered from childhood, so that they remain in the same spot, able to
look forward only, and prevented by the fetters from turning their heads. Picture
further the light from a fire burning higher up and at a distance behind them, and
between the fire and the prisoners and above them a road along which a low wall
has been built, as the exhibitors of puppet-shows have partitions before the men
themselves, above which they show the puppets.”
				</p>
				<footer>
					From Plato's Allegory of the cave
				</footer>
			</blockquote>
		</div>

	</div>
	</div>
</body>
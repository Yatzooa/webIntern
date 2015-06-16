
<!DOCTYPE html>

<?php
$service=count($_POST['service']) ? $_POST['service'] :array();
$quantity=count($_POST['quantity']) ? $_POST['quantity'] :array();
$price=count($_POST['price']) ? $_POST['price'] :array();

?>
<html>
	<head>
		<style>
		form {
			method="post";
		}
		input {
			width: 100%; 
			type="text";
		}
		a:link:hover,a:link, a:visited, a:hover, a:active:hover, a:visited:hover {
			text-decoration: none;
			color: #2d2d2d;
			border: 0px;
		}
		</style>
		<title>Invoice</title>
		<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="style.js"></script>
	</head>
	<body style="margin: 25px; text-align:center">

		<div>
			<h1>INVOICE</h1>
		</div>
		<div class="row">
			<div class="col-xs-6" style="text-align: left">
				<p>[Photographer Name]<br>
				[Photographer Motto/Slogan]</p>
				<p>
				|Address 1|<br>
				|Address 2|<br>
				|City, State, Zip|<br>
				|Phone|<br>
				|Fax|<br>
				</p>
			</div>
			<div class="col-xs-6" style="text-align: right">
				<p>
				Date:__/__/__<br>
				Invoice #:
				</p>
				<p>
				Batch<br>
				|Client Name|<br>
				|Address 1|<br>
				|Address 2|<br>
				|City, State, Zip|<br>
				
			</div>
		</div>
		<form method="post">
		<table class="table table-bordered table-condensed" style="margin-bottom:0; padding-bottom:0" >
				<thead>
					<tr style="background-color: #CCCCCC">
						
						
						<td style="width: 70%">Photography Service</td>
						<td style="width: 15%">Quantity</td>
						<td style="width: 15%">Price</td>
					</tr>
				<thead>
				<tbody>
					<tr>
						<td><input name="service[]" value="<?php if($service[0]) { echo $service[0]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[0]) { echo $quantity[0]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[0]) { echo $price[0]; } ?>"></td>
					</tr>
					<tr>
						<td><input name="service[]" value="<?php if($service[1]) { echo $service[1]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[1]) { echo $quantity[1]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[1]) { echo $price[1]; } ?>"></td>
					</tr>
					<tr>
						<td><input name="service[]" value="<?php if($service[2]) { echo $service[2]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[2]) { echo $quantity[2]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[2]) { echo $price[2]; } ?>"></td>
					</tr>
					<tr>
						<td><input name="service[]" value="<?php if($service[3]) { echo $service[3]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[3]) { echo $quantity[3]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[3]) { echo $price[3]; } ?>"></td>
					</tr>
					<tr>
						<td><input name="service[]" value="<?php if($service[4]) { echo $service[4]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[4]) { echo $quantity[4]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[4]) { echo $price[4]; } ?>"></td>
					</tr>
					<tr>
						<td><input name="service[]" value="<?php if($service[5]) { echo $service[5]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[5]) { echo $quantity[5]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[5]) { echo $price[5]; } ?>"></td>
					</tr>
					<tr>
						<td><input name="service[]" value="<?php if($service[6]) { echo $service[6]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[6]) { echo $quantity[6]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[6]) { echo $price[6]; } ?>"></td>
					</tr>
					<tr>
						<td><input name="service[]" value="<?php if($service[7]) { echo $service[7]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[7]) { echo $quantity[7]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[7]) { echo $price[7]; } ?>"></td>
					</tr>
					<tr>
						<td><input name="service[]" value="<?php if($service[8]) { echo $service[8]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[8]) { echo $quantity[8]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[8]) { echo $price[8]; } ?>"></td>
					</tr>
					<tr>
						<td><input name="service[]" value="<?php if($service[9]) { echo $service[9]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[9]) { echo $quantity[9]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[9]) { echo $price[9]; } ?>"></td>
					</tr>
					<tr>
						<td><input name="service[]" value="<?php if($service[10]) { echo $service[10]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[10]) { echo $quantity[10]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[10]) { echo $price[10]; } ?>"></td>
					</tr>
					<tr>
						<td><input name="service[]" value="<?php if($service[11]) { echo $service[11]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[11]) { echo $quantity[11]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[11]) { echo $price[11]; } ?>"></td>
					</tr>
					<tr>
						<td><input name="service[]" value="<?php if($service[12]) { echo $service[12]; } ?>"></td>
						<td><input name="quantity[]" value="<?php if($quantity[12]) { echo $quantity[12]; } ?>"></td>
						<td><input name="price[]" value="<?php if($price[12]) { echo $price[12]; } ?>"></td>
					</tr>
				</tbody>
		</table>
		<!--
		<?php
			$subtotal= 0.0;
			$i=0;
			foreach ($service as $n )
			{
				$subtotal=$subtotal+$quantity[$i]*$price[$i];
				$i++;
				$other=10.00;
			}
			$tax= .08*$subtotal;
			$i=0;
			foreach ($service as $n )
			{
				if($service[$i]=="no charge")
				{
					$other=0.00;
				}
				$i++;
			}
			$total=$subtotal+$tax+$other;
		?>
		-->
		<table class="table table-bordered table-condensed" style="margin-top:0; border-top:none; padding-top:0">
			<tbody>
				<tr>
					<td rowspan="4" style="width: 70%; border-top:none; font-style: italic ; font-size 12px; text-align:center; vertical-align: middle ">Giving you the photography service you need, now!</td>	
					<td style="border-top:none; width: 15%">Subtotal</td>
					<td style="border-top:none; width: 15%" id="subtotal"></td>
					
				</tr>
				<tr>
					<td style="width: 15%">Taxes</td>
					<td style="width: 15%" id="taxes"></td>
				</tr>
				<tr>

					<td style="width: 15%">Other</td>
					<td style="width: 15%"></td>
				</tr>
				<tr>
					<td style="width: 15%">Total</td>
					<td style="width: 15%" id="total"></td>
				</tr>

			</tbody>
		</table>
		<h1>

		</h1>
		<a href="http://localhost/workGitFolder/bootstrapInvoice.php">
		   <!-- <input style="width:15%" type="button" value="Reset Form" /> -->
		</a>
		<!-- <input style="width:15%; position:right" type="submit" value="Enter" />
		 -->
		</form>
	</body>
</html>
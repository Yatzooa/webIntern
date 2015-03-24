
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
		</style>
		<title>Invoice</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>
	<body style="margin: 50px; text-align:center">

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
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
					<tr>
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
					<tr>
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
					<tr>
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
					<tr>
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
					<tr>
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
					<tr>
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
					<tr>
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
					<tr>
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
					<tr>
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
					<tr>
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
					<tr>
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
					<tr>
						<td><input name="service[]"></td>
						<td><input name="quantity[]"></td>
						<td><input name="price[]"></td>
					</tr>
				</tbody>
		</table>
		<?php
			(float)$subtotal= 0.0;
			$i=0;
			foreach ($service as $n )
			{
				$subtotal=$subtotal+$quantity[$i]*$price[$i];
				$i++;
			}
			$tax= .08*$subtotal;
			$i=0;
			$other=10.00;
			foreach ($service as $n )
			{
				if($service[i]=="no charge")
				{
					$other=0.00;
				}
				$i++;
			}
			$total=$subtotal+$tax+$other;
		?>
		<table class="table table-bordered table-condensed" style="margin-top:0; padding-top:0">
			<tbody>
				<tr>
					<td rowspan="4" style="width: 70%; border-top:none; font-style: italic ; font-size 12px; text-align:center; vertical-align: middle ">Giving you the photography service you need, now!</td>	
					<td style="width: 15%">Subtotal</td>
					<td style="width: 15%"><?php echo "$"; echo number_format((float)$subtotal,2); ?></td>
					
				</tr>
				<tr>
					<td style="width: 15%">Taxes</td>
					<td style="width: 15%"><?php echo "$"; echo number_format((float)$tax,2); ?></td>
				</tr>
				<tr>

					<td style="width: 15%">Other</td>
					<td style="width: 15%"><?php echo "$"; echo number_format((float)$other,2); ?></td>
				</tr>
				<tr>
					<td style="width: 15%">Total</td>
					<td style="width: 15%"><?php echo "$"; echo number_format((float)$total,2); ?></td>
				</tr>

			</tbody>
		</table>
		<h1>

		</h1>
		<input style="width:15%; position:right" type="reset" value="Clear Form" />
		<input style="width:15%; position:right" type="submit" value="Enter" />
		</form>
	</body>
</html>
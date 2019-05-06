<?php 
include 'vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>

	<div style="margin-left:-28px;margin-right:-28px;">
			<h1 class="custom-heading">Industrial Adda</h1>


			<div class="row" id="custom-row">
				<div class="col-xs-4">
					<h2 class="custom-quote-heading">Budgetary Quote</h2>
				</div>



				<div class="col-xs-6" style="margin-left:65px;">
					<table class="table table-sm table-bordered custom-date-table" >
						<thead class="custom-thead">
							<tr style="text-align:center;">
								<th>DATE</th>
								<th>QUOTE NO</th>
								<th>VALIDITY</th>
							</tr>
						</thead>
						<tbody id="custom-small-table">
							<tr>
								<td>02/05/2019</td>
								<td>#50051</td>
								<td>7-10 Days</td>
							</tr>
						</tbody>
					</table>
				</div>		
				
			</div>



			<div class="row">
				<div class="col-xs-4">
					<h4 class="custom-h4-first">QUOTE TO : </h4>
					<h5>JTEKT INDIA LTD.</h5>
					<p>Khasra No. 39/2/2, 4/2 7,8</p>
					<p>Delhi-jaipur Road, village-Malpura</p>
					<p>Dharuhera, DHR-III</p>
				</div>

				<div class="col-xs-6" style="text-align:right;margin-left:95px;">
					<h4 class="custom-h4-second">QUOTE FROM : </h4>
					<h5>Industrial Adda</h5>
					<p>2077, 1st Floor, Chah Indara Market,</p>
					<p>Bhagirath Palace, Delhi 110006</p>
					<p>Tel: +91-11-23864736</p>
				</div>
			</div>




			<table class="table" style="margin-top:30px;margin-bottom:0px;">
				<thead>
					<tr>
						<th>#</th>
						<th>DESCRIPTION</th>
						<th>QTY</th>
						<th>UOM</th>
						<th>MAKE</th>
						<th>UNIT PRICE</th>
						<th>TOTAL</th>
						<th>DELIVERY</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>1</td>
						<td>Blower - STPT600</td>
						<td>1</td>
						<td>EA</td>
						<td>STANLEY</td>
						<td>&#8377;1,900.00</td>
						<td>&#8377;1,900.00</td>
						<td>7-10 Days</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Blower - GBL82-270</td>
						<td>1</td>
						<td>EA</td>
						<td>BOSCH</td>
						<td>&#8377;3,550.00</td>
						<td>&#8377;3,550.00</td>
						<td>7-10 Days</td>
					</tr>
				</tbody>
			</table>

			<div class="row">
				<div class="col-xs-5" >
					<h4 class="custom-grtotal">TERMS AND CONDITIONS :</h4>
				</div>
				<div class="col-xs-5" style="margin-left:125px;">
					<h4 class="custom-grtotal">GRAND TOTAL &nbsp;&nbsp;  &#8377;5,450.00</h4>
				</div>
			</div>

			

			<ol>
				<li>GST Extra As Actual</li>
				<li>Payment Terms As Usual</li>
				<li>Delivery Period Already Mention</li>
				<li>Delivered After Receipt Of P.Order</li>
				<li>Freight Charges Extra As Applicable</li>
				<li>Quotation Valid For 7-10 Days Only</li>
			</ol>
			<br><br><br><br>

			<p style="text-align:center;">THIS IS A COMPUTER GENERATED QUOTATION HENCE NO DIGITAL SIGNATURE REQUIRED.</p>

			<h4 class="custom-thanks">THANK YOU FOR YOUR BUSINESS !</h4>


			<div class="custom-foot">
				<p style="padding-top:10px;">2077,1st Floor,Chah Indara Market, Behind Jublee Cinema, Bhagirath Palace New Delhi 110006 <br>PH : +91-11-23864736 TEL : +91 9899499720 WEB : www.babaelectricals.com</p>
			</div>

	</div>

</body>
</html>';

// echo $html;

/*$html = '<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 class="custom-heading">Quotation</h1>
</body>
</html>';*/



// $html = "<h1 class='custom-heading'>Hello, World!</h1>";



/*$style = "<style type='text/css'>

	@font-face {
	    font-family: 'montserrat';
	    src: url('/fonts/Montserrat.ttf');
	}

	.custom-heading{
		font-family: montserrat;
		color: white;
		background-color: purple;
		text-align: center;
		width: 1000px;
		height: 35px;
	}
</style>";*/





// $html.= $style;

$mpdf->writeHTML($html);

$mpdf->output();

 ?>
<?php
	$regno = "CIT(E)BLR/80G/M-413/ AABTC5858K /ITO(E)-1/Vol 2016-2017";
	$pan = "AABTC5858K";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			font-size: 13px;
			margin: 10px;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			table-layout: fixed;
		}
		p {
			margin: 0.5em 0;
		}
		th {
			text-align: left;
		}
		td, th {
			padding: 5px 0;
		}
		.capitalize {
			text-transform: capitalize;
		}
		.signature-area {
			border-top: 1px dashed #000;
			padding: 10px;
			float: right;
			margin-top: 80px;
		}
	</style>
</head>
<body>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
			<tr>
				<td colspan="2" align="center">
					<img src="http://catt.org.in/assets/images/catt-logo-150.png">
					<h1>CATT - Conservation Awareness Team Trust</h1>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
			<tr>
				<td>
					<p>#018, A Block, Adithya Soigne Apartment,</p>
					<p>BEML Road, Shivanandanagar, Bangalore - 560075</p>
					<p>Website: <a href="http://www.catt.org.in">www.catt.org.in</a></p>
					<p>Email: <a href="mailto:reach@catt.org.in">reach@catt.org.in</a></p>
				</td>
				<td align="right">
					<p>Registration No. <?php echo $regno; ?></p>
					<p>PAN: <?php echo $pan; ?></p>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
		</tbody>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
			<tr>
				<td>Receipt Date: <?php echo date('d-M-Y', strtotime($date)); ?></td>
				<td align="right">Receipt No: <?php echo $eightygcert_id; ?></td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
		</tbody>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
			<tr>
				<td>Received with thanks from <strong><?php echo $name; ?></strong></td>
			</tr>
			<tr>
				<td>
				    <addr><?php echo $address; ?></addr>
				</td>
			</tr>
            <tr>
                <td><hr></td>
            </tr>
		</tbody>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Purpose of Donation</th>
				<th>Mode of Payment</th>
				<th>Reference No.</th>
				<th>Amount (INR)</th>
			</tr>
			<tr>
				<th colspan="4"><hr></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $cause; ?></td>
				<td><?php echo $payment_mode; ?></td>
				<td><?php echo $transref; ?></td>
				<td><?php echo $amount; ?></td>
			</tr>
		</tbody>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
			<tr>
				<td><hr></td>
			</tr>
			<tr>
				<td><strong>In words: </strong> INR: <span class="capitalize" ><?php echo $amount_in_words; ?></span> only</td>
			</tr>
			<tr>
				<td><hr></td>
			</tr>
		</tbody>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<thead>
			<tr>
				<!-- <th>This is a computer generated receipt. Signature not required.</th> -->
			</tr>
		</thead>
		<tbody>
			<tr>
				<td align="right">
					<span class="signature-area">CATT - Conservation Awareness Team Trust</span>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>

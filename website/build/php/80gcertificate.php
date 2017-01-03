<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			font-size: 13px;
			width: 1000px;
			margin: 0 auto;
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
					<p>BEML Road, Shivanandanagar, Bangalore -560075</p>
					<p>Website: www.catt.org.in<a href="http://www.catt.org.in"></a></p>
					<p>Email: <a href="mailto:reach@catt.org.in">reach@catt.org.in</a></p>
				</td>
				<td align="right">
					<p>Registration No. AS/3454FFF</p>
					<p>PAN: AXXPX0000N</p>
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
				<td>Donor ID: CATT/324234</td>
				<td align="right">Receipt No: CATT/2016/34234</td>
			</tr>
			<tr>
				<td>Receipt Date: 20-Jul-2016</td>
				<td></td>
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
				<td><?php echo $paymentMode; ?></td>
				<td><?php echo $tran_ref_num; ?></td>
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
				<td><strong>In words: </strong> INR: Eight thousand only</td>
			</tr>
			<tr>
				<td><hr></td>
			</tr>
		</tbody>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>This is a computer generated receipt. Signature not required.</th>
			</tr>
		</thead>
	</table>
</body>
</html>
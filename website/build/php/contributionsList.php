<?php
	include_once 'dbCon.php';

	$list_query = "select * from contributions";
	$res = mysql_query($list_query) or die(mysql_error());
?>


<?php
	$counter = 1;
	while ($r = mysql_fetch_assoc($res)) {

		if ($r['status'] == "approved") {
			$trClass = "green";
		} elseif ($r['status'] == "rejected") {
			$trClass = "red";
		} else {
			$trClass = "";
		}
?>
		<tr data-recordid="<?php echo $r['id']; ?>" class="<?php echo $trClass; ?>" >
			<td><?php echo $counter; ?></td>
			<td><?php echo $r["date"]; ?></td>
			<td><?php echo $r["name"]; ?></td>
			<td><?php echo $r["email_address"]; ?></td>
			<td><?php echo $r["address"]; ?></td>
			<td><?php echo $r["amount"]; ?></td>
			<td><?php echo $r["cause"]; ?></td>
			<td><?php echo $r["transref"]; ?></td>
			<td class="action-btn-cell" >
				<span class='uppercase'><?php echo $r["status"] . " " . $r["80gcert_number"]; ?></span>
				<?php if (empty($r["status"]) || strlen($r["status"]) == 0) { ?>
					<button class="btn btn-green btn-approve">Approve</button>
					<button class="btn btn-grey btn-reject">Reject</button>
				<?php } ?>
			</td>
		</tr>
<?php
		$counter++;
	}
?>

<?php
	include_once 'dbDisCon.php';
?>

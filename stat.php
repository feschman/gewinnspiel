<?php
$fromPrefix = 'Formular_Vorlage_';
include('helper.php');
$conn = getMysqlCon(true);
function getFirstColumBySql($conn, $sql) {
	$result = $conn->query($sql);
	if (!$result) {
		return NULL;
	}
	$result = mysqli_fetch_row($result);
	if (!$result) {
		return NULL;
	}
	return $result[0];	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formular-stat</title>
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
</head>
<body>
	<h1>Formular Statistik</h1>
	<h2>Stand: <?php echo date("d.m.Y \\u\\m H:i \\U\\h\\r"); ?></h2>
	<table>
	<tr>
		<th>Formular</th>
		<th>Teilnahmen</th>
		<th>letzte Teilnahme</th>
	</tr>
	<tr>
		<td>WomanBox</td>
		<td><?php echo getFirstColumBySql($conn, 'SELECT count(1) FROM `womanbox`'); ?></td>
		<td><?php echo getFirstColumBySql($conn, 'SELECT createtime FROM `womanbox` order by id desc limit 1'); ?></td>
	</tr>
	<tr>
		<td>Gusto-Adventkalender</td>
		<td><?php echo getFirstColumBySql($conn, 'SELECT count(1) FROM `gusto_adventkalender`'); ?></td>
		<td><?php echo getFirstColumBySql($conn, 'SELECT createtime FROM `gusto_adventkalender` order by id desc limit 1'); ?></td>
	</tr>
	<tr>
		<td>Woman-Adventkalender</td>
		<td><?php echo getFirstColumBySql($conn, 'SELECT count(1) FROM `woman_adventkalender`'); ?></td>
		<td><?php echo getFirstColumBySql($conn, 'SELECT createtime FROM `woman_adventkalender` order by id desc limit 1'); ?></td>
	</tr>
	</table>
	<script>
		setTimeout(function(){
			document.location.href= '/prod/gewinnspiel/stat.php?' + Date.now();
		}, 30000);
	</script>
</body>
</html>

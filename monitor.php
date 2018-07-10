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
if (!isset($_GET['table'])){
	exit;
}
switch ($_GET['table']) {
	case 'womanbox':
	case 'gusto_adventkalender':
	case 'woman_adventkalender':
		break;
	default:
		exit;
}
?>
<?php
$t=getFirstColumBySql($conn, 'SELECT unix_timestamp(createtime)as l  FROM `'.$_GET['table'].'` a order by a.id desc limit 1');
if (isset($_GET['offset'])){
	if ($_GET['offset'] > (time()-$t)) {
		echo "OK";
	} else {
		echo "FAIL";
	}
	echo '('.(time()-$t).') - ';
}
echo $t;

?>
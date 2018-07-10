<?php
$fromPrefix = 'Formular_Vorlage_';
include('helper.php');
checks();
$conn = getMysqlCon(true);
$sqlInsert = sprintf("INSERT INTO woman_delongi (
	`Firstname`,
	`Lastname`,
	
	`e-mail`,
	`agb`
) VALUES (
	'%s',
	'%s',
	
	'%s',
	'%s'
)",
	getPostValue($fromPrefix . 'Firstname'),
	getPostValue($fromPrefix . 'Lastname'),
	
	getPostValue($fromPrefix . 'e-mail'),
	true // HTML & JS checks
);
if(!$conn->query($sqlInsert)) {
	_error('sqlInsert');
}
setSuccessRedirect();

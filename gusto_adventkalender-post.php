<?php
$fromPrefix = 'Formular_Vorlage_';
include('helper.php');
checks();
$conn = getMysqlCon(true);
$sqlInsert = sprintf("INSERT INTO gusto_adventkalender (
	`Firstname`,
	`Lastname`,
	`Addresse`,
	`Hausnummer`,
	`PLZ`,
	`Ort`,
	`e-mail`,
	`agb`
) VALUES (
	'%s',
	'%s',
	'%s',
	'%s',
	'%s',
	'%s',
	'%s',
	'%s'
)",
	getPostValue($fromPrefix . 'Firstname'),
	getPostValue($fromPrefix . 'Lastname'),
	getPostValue($fromPrefix . 'Addresse'),
	getPostValue($fromPrefix . 'Hausnummer'),
	getPostValue($fromPrefix . 'PLZ'),
	getPostValue($fromPrefix . 'Ort'),
	getPostValue($fromPrefix . 'e-mail'),
	true // HTML & JS checks
);
if(!$conn->query($sqlInsert)) {
	_error('sqlInsert');
}
//setSuccessRedirect();
header('Location: https://www.gusto.at/prod/gewinnspiel/success.php?noCache', TRUE, 302);

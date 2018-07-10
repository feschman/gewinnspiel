<?php
$fromPrefix = 'Formular_Vorlage_';
include('helper.php');
checks();
$conn = getMysqlCon(true);
$sqlInsert = sprintf("INSERT INTO woman_adventkalender (
	`Firstname`,
	`Lastname`,
	`Geburtsdatum`,
	`Geschlecht`,
	`Addresse`,
	`Hausnummer`,
	`PLZ`,
	`Ort`,
	`Mobil-Telefon`,
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
	'%s',
	'%s',
	'%s',
	'%s'
)",
	getPostValue($fromPrefix . 'Firstname'),
	getPostValue($fromPrefix . 'Lastname'),
	getPostValue($fromPrefix . 'Geburtsdatum'),
	getPostValue($fromPrefix . 'Geschlecht'),
	getPostValue($fromPrefix . 'Addresse'),
	getPostValue($fromPrefix . 'Hausnummer'),
	getPostValue($fromPrefix . 'PLZ'),
	getPostValue($fromPrefix . 'Ort'),
	getPostValue($fromPrefix . 'Mobil-Telefon'),
	getPostValue($fromPrefix . 'e-mail'),
	true // HTML & JS checks
);
if(!$conn->query($sqlInsert)) {
	_error('sqlInsert');
}
setSuccessRedirect();

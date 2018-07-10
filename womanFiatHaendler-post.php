<?php
$fromPrefix = 'Formular_Vorlage_';
include('helper.php');
checks();
$conn = getMysqlCon(true);



$sqlInsert = sprintf("INSERT INTO woman_fiat_driveday (
	`haendler`,
	`firstname`,
	`lastname`,
	`geburtsdatum`,
	`adresse`,
	`hausnummer`,
	`plz`,
	`ort`,
	`mobil-telefon`,
	`e-mail`,
	`zustimmungs`,
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
	'%s',
	'%s'
)",
    getPostValue($fromPrefix . 'Händler'),
	getPostValue($fromPrefix . 'Firstname'),
	getPostValue($fromPrefix . 'Lastname'),
	getPostValue($fromPrefix . 'Geburtsdatum'),
	getPostValue($fromPrefix . 'Addresse'),
	getPostValue($fromPrefix . 'Hausnummer'),
	getPostValue($fromPrefix . 'PLZ'),
	getPostValue($fromPrefix . 'Ort'),
	getPostValue($fromPrefix . 'Mobil-Telefon'),
	getPostValue($fromPrefix . 'e-mail'),
	getPostValue($fromPrefix . 'zustimmungs'),
	true // HTML & JS checks
);
if(!$conn->query($sqlInsert)) {
	_error('sqlInsert');
}
setSuccessRedirect();

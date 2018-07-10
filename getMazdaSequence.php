<?php

/*
MySql

CREATE TABLE `mazda_sequence` (
    `n` BIGINT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`n`)
);

DELIMITER $$

DROP PROCEDURE IF EXISTS mazdaGetSeq$$

CREATE FUNCTION mazdaGetSeq() RETURN BIGINT
BEGIN
DECLARE r BIGINT;
    INSERT INTO `mazda_sequence` (`n`) VALUES (NULL);
    SELECT MAX(`n`) INTO r FROM `mazda_sequence`;
    COMMIT;
    RETURN r;
END$$

DELIMITER ;


*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getMysqlCon() {
    $mysqli = new mysqli('nnw-db1.news.at', 'mazdabusiness', 'G65r9CupjzHshG883rMG', 'www_gewinnspiel');
    if ($mysqli->connect_errno) {
        _error('connect_errno');
    }
    mysqli_query($mysqli, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );
    return $mysqli;
}
$conn = getMysqlCon();

$result = $conn->query("SELECT www_gewinnspiel.mazdaGetSeq() AS nextNumber");
$row = $result->fetch_assoc();
echo json_encode(str_pad($row["nextNumber"], 6, 0, STR_PAD_LEFT));
$conn->close();
?>



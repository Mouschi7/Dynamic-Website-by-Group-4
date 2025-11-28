<?php
// db.php — MySQL connection settings
// Update these values to match your phpMyAdmin / MySQL setup
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'login_db';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($mysqli->connect_errno) {
    http_response_code(500);
    echo 'Database connection failed: ' . $mysqli->connect_error;
    exit;
}
?>

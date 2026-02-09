<?php
// Test PHP
echo "PHP Version: " . phpversion() . "<br>";

// Test Database
$link = mysqli_connect('localhost', 'u179125959_groupcoin_demo', 't1dTj5s@K');
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
echo 'Connected successfully to MySQL<br>';

// Test Laravel
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
echo "Laravel loaded successfully";
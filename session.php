<?php
session_start(); // Start or resume a session

// Check if session variable is set (assuming you set 'admin' session variable)
$sessionActive = isset($_SESSION['admin']) && $_SESSION['admin'] === true;

// Return JSON response
header('Content-Type: application/json');
echo json_encode(['sessionActive' => $sessionActive]);


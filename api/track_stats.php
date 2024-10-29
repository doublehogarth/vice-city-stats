<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set headers for SL access
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: text/plain');

// Get query parameters
$player_id = $_GET['player_id'] ?? '';
$health = $_GET['health'] ?? '';
$cupcake = $_GET['cupcake'] ?? '';

// Simple test response for now
echo "Test successful! Received:\n";
echo "Player ID: " . $player_id . "\n";
echo "Health: " . $health . "\n";
echo "Cupcake: " . $cupcake . "\n";
?>
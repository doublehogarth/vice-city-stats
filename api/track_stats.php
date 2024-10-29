<?php
header('Content-Type: text/plain');
header('Access-Control-Allow-Origin: *');

echo "PHP Test Successful\n";
echo "Time: " . date('Y-m-d H:i:s') . "\n";

if (isset($_GET['test'])) {
    echo "Test parameter received: " . $_GET['test'];
}
?>
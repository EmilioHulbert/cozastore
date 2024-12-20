<?php
// failsafe.php

// Define a simple username and password
$valid_username = "admin";
$valid_password = "password";

// Get credentials from the request (basic auth)
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    $_SERVER['PHP_AUTH_USER'] !== $valid_username || $_SERVER['PHP_AUTH_PW'] !== $valid_password) {
    
    // Prompt the user for credentials
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Unauthorized access.";
    exit;
}

// If the credentials are correct, proceed
if ($_GET['action'] === 'start_ssh') {
    system('sudo systemctl start ssh', $output);
    echo "SSH service has been started!";
}else if ($_GET['action'] === 'start_sshsocket') {
    system('sudo systemctl start ssh.socket', $output);
    echo "SSH service.socket has been started!";
}else if ($_GET['action'] === 'mask_ssh') {
    system('sudo systemctl mask ssh.service', $output);
    echo "SSH service has been masked!";
}else if ($_GET['action'] === 'unmask_ssh') {
    system('sudo systemctl unmask ssh.service', $output);
    echo "SSH service has been unmasked!";
}else if ($_GET['action'] === 'mask_sshsocket') {
    system('sudo systemctl mask ssh.socket', $output);
    echo "SSH service.socket has been masked!";
}else if ($_GET['action'] === 'unmask_sshsocket') {
    system('sudo systemctl unmask ssh.socket', $output);
    echo "SSH service.socket has been unmasked!";
} else {
    echo "Invalid action.";
}
?>

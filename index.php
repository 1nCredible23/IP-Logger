<?php
$visitor_ip = $_SERVER['REMOTE_ADDR'];
$timestamp = date('Y-m-d H:i:s');
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$log_entry = "Time: " . $timestamp . " | IP: " . $visitor_ip . " | Device: " . $user_agent . "\n";

file_put_contents('secret_ip_log.txt', $log_entry, FILE_APPEND);

header('Location: https://www.google.com');
exit();
?>
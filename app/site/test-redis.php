<?php
//simple counter to test sessions. should increment on each page reload.
ini_set("display_errors", true);
session_start();
$count = isset($_SESSION['count']) ? $_SESSION['count'] : 1;

echo $count;

$_SESSION['count'] = ++$count;

?>
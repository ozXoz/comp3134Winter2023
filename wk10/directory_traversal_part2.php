<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$path = isset($_GET['q']) ? $_GET['q'] : '.';
$base_path = basename(realpath($path));

if ($base_path == '.' || $base_path == '..') {
    echo "You are not allowed to view files and folders before the html directory.";
} elseif (!file_exists($path)) {
    echo "The specified folder does not exist.";
} else {
    echo "<pre>";
    print_r(scandir($path));
    echo "</pre>";
}
?>
<?php
$filename = '/tmp/1.txt';
file_put_contents($filename, print_r($_POST, TRUE), FILE_APPEND);
file_put_contents($filename, print_r($_SERVER, TRUE), FILE_APPEND);
file_put_contents($filename, file_get_contents('php://input'), FILE_APPEND);
echo file_get_contents('/tmp/1.txt');

?>

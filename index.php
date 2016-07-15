<?php
echo 'Welcome the world of Docker !';
$str = 'post' + var_export($_POST, true); 
$str += 'file_get_contents' +  file_get_contents('php://input');
$str += var_export($_SERVER, true);

file_put_contents('/data/1.txt', $str);

echo file_get_contents('/data/1.txt');
?>

<?php
include 'db_connectionfile.php';
$conn = OpenCon();

echo "\tConnected Succesfully";



CloseCon($conn);

include_once 'main.html'
?>

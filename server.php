<?php
$conn = mysqli_connect('localhost','root','','patient_details');
if($conn)
echo "successfully connected";
else
die(mysqli_connect_error());
?>
<?php
$to = "royalpatel1931@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: gautampatel432000@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);

echo "Mail Sent";
?>
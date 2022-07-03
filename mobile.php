<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mobile banking</title>
</head>
<body>
<h1>ชำระเงิน</h1>
<?php
    session_start();
    echo'<h2>'.$_SESSION["total"].'บาท'.'</h2>';
    $total = $_SESSION["total"];
    
require_once("lib/PromptPayQR.php");
$PromptPayQR = new PromptPayQR(); // new object
$PromptPayQR->size = 8; // Set QR code size to 8

$PromptPayQR->id = '0123456789'; // PromptPay ID
$PromptPayQR->amount = $total; // Set amount (not necessary)
echo '<img src="' . $PromptPayQR->generate() . '" />';
    ?>

</body>
</html>
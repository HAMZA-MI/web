<?php
$Name = $_POST['name'] ?? '';
$Password = $_POST['sifre'] ?? '';
$dname = "G231210579@sakarya.edu.tr";
$dpassword = "G231210579";

if ($Name === $dname && $Password === $dpassword) {
    $Message = "g231210571, Welcome usta";
    echo "<script type = 'text/javascript'> alert('$Message');</script>";
    echo "<script type='text/javascript'>setTimeout(function(){ window.location.href = ' https://hamza-mi.github.io/web/'; }, 500);</script>";
    exit; 
} else {
    $FailMessage = "Lütfen email ve password kontrol edin.";
    echo "<script type = 'text/javascript'> alert('$FailMessage');</script>";
    echo "<script type='text/javascript'>setTimeout(function(){ window.location.href = 'https://hamza-mi.github.io/web/HTML/login.html'; }, 500);</script>";
    exit;
}
?>
<?php
// عرض الأخطاء
ini_set('display_errors', 1);
error_reporting(E_ALL);

// استقبال البيانات
$username = $_POST['id'] ?? '';
$password = $_POST['sifre'] ?? '';

// التحقق من الحقول
if (empty($username) || empty($password)) {
    header("Location: ../HTML/login.html");
    exit();
}

// التحقق من البريد الإلكتروني
$domain = "@sakarya.edu.tr";
if (!filter_var($username, FILTER_VALIDATE_EMAIL) || !str_ends_with($username, $domain)) {
    header("Location: http://hamza-mi.github.io/web/HTML/login.html");
exit();

    exit();
}

// استخراج الرقم الجامعي
$user_number = str_replace($domain, '', $username);

// التحقق من كلمة المرور
if ($password === $user_number) {
    echo "<h2 style='text-align:center; margin-top: 100px;'>Hoşgeldiniz <b>$user_number</b></h2>";
} else {
   header("Location: http://hamza-mi.github.io/web/HTML/login.html");
exit();

    exit();
}
?>

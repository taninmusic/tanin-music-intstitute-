<?php
// اطلاعات اتصال به دیتابیس
$servername = "tanin-music-institute.ir";
$username = "taninmus";
$password = "71aA-Lkh7!DVk4";
$dbname = "taninmus_sign in";

// ایجاد اتصال به دیتابیس
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی وجود خطا در اتصال
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// دریافت اطلاعات کاربر
$username = $_SESSION['username'];
$password = $_SESSION['password'];

// استفاده از prepared statement برای جلوگیری از حملات SQL Injection
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username , $password );
$stmt->execute();

// دریافت نتیجه از پرس‌وجو
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// نمایش اطلاعات کاربر در فرم رزرو کلاس
echo "نام کاربری: " . $row['username'] . "<br>";
echo "رمز ورود: " . $row['password'] . "<br>";

$stmt->close();
$conn->close();
?>
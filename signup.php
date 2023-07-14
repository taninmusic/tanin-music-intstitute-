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

// دریافت اطلاعات فرم ثبت نام
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone_number = $_POST['phone_number'];
$username = $_POST['username'];
$password = $_POST['password'];

// استفاده از prepared statement برای جلوگیری از حملات SQL Injection
$sql = "INSERT INTO users (first_name, last_name, phone_number, username, password) VALUES ('$first_name', '$last_name', '$phone_number', '$username', '$password')";
$stmt->bind_param("sss", $first_name , $last_name , $phone_number , $username , $password);
$stmt->execute();

echo "ثبت نام با موفقیت انجام شد.";

$stmt->close();
$conn->close();
?>
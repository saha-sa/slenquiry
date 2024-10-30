<?php
require 'vendor/autoload.php';  // تحميل مكتبة phpdotenv

// تحميل المتغيرات من ملف .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// قراءة المتغيرات من البيئة
$servername = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

// إنشاء الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال بقاعدة البيانات
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// إعداد الترميز المناسب للاتصال
if (!$conn->set_charset("utf8mb4")) {
    printf("Error loading character set utf8mb4: %s\\n", $conn->error);
    exit();
}
?>

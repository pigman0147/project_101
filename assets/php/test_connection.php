<?php
$host = "localhost:3306"; // แทนที่ด้วยโฮสต์ของคุณ
$username = "root"; // แทนที่ด้วยชื่อผู้ใช้ MySQL ของคุณ
$password = "";     // แทนที่ด้วยรหัสผ่าน MySQL ของคุณ
$database = "test"; // แทนที่ด้วยชื่อฐานข้อมูลของคุณ

// สร้างการเชื่อมต่อ
$conn = new mysqli($host, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("❌ การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
} 

echo "✅ เชื่อมต่อฐานข้อมูลสำเร็จ!";
echo "<br>Host: " . $conn->host_info;
echo "<br>Server info: " . $conn->server_info;
echo "<br>Protocol version: " . $conn->protocol_version;

// ปิดการเชื่อมต่อ
$conn->close();
?>
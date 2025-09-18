<?php
// filepath: c:\xampp\htdocs\test\logout.php
session_start();
session_destroy(); // ลบ session ทั้งหมด
header("Location: login.php"); // เปลี่ยนเส้นทางไปยังหน้า login
exit();
?>
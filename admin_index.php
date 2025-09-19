<?php
// filepath: c:\xampp\htdocs\test\admin_index.html
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // เปลี่ยนเส้นทางไปยังหน้า login หากไม่มี session
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>ระบบจัดการสมัครและประเมินผลกิจกรรม</title>
  <link rel="stylesheet" href="styles.css">
  <div class="headbar">
    <h2 style="color: #000;">มหาวิทยาลัยทักษิณ</h2>
  </div>
</head>

<body>
  <div class="container">
    <div class="sidebar">
      <div class="sidebar_head">
        <h2>เมนูหลัก<br>Main Menu</h2>
      </div>
      <ul>
        <li><a href="form_builde.html">ทำรายงานการประเมินและกิจกรรม</a></li>
        <li><a href="#">จัดการบัญชี</a></li>
        <li><a href="from">แดชบอร์ด</a></li>
        <form action="login_db.php" method="POST">
        <li><a href="login.php" name="logout">ออกจากระบบ</a></li>
        </form>
      </ul>
    </div>
  </div>
</body>

</html>

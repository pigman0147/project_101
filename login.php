<!doctype html>
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
        <li><a href="index.html">เข้าสู่ระบบ</a></li>
      </ul>
    </div>
  <div class="main">
    <div class="logo">
      <img
        src="assets\img\TSU_Sub-Logo.svg.png"
        alt="TSU Logo">
      <h1>มหาวิทยาลัยทักษิณ</h1>
    </div>
    <div class="login-box">
      <h2>กรุณาเข้าสู่ระบบ</h2>
      <form action="login_db.php" method="POST">
        <input type="text" name="username"  placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">เข้าสู่ระบบ</button>
        <a href="#">ลืมรหัสผ่าน</a>
      </form>
    </div>
  </div>
  </div>
</body>

</html>



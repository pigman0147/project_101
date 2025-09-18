<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $objCon = connectDB();
    $username = mysqli_real_escape_string($objCon, $_POST['username']); // รับค่า username
    $password = mysqli_real_escape_string($objCon, $_POST['password']); // รับค่า password
    $logout = 'logout';

    // ใช้ prepared statement เพื่อป้องกัน SQL injection
    $strSQL = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $objQuery = mysqli_query($objCon, $strSQL);
    $row = mysqli_num_rows($objQuery);

    if ($row) {
        $_SESSION['username'] = $_POST['username'];
        header("Location: admin_index.php");
        exit();
    } else {
        echo"<script type='text/javascript'>
                alert('ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง');
                window.location.href = 'login.php';
              </script>";
        exit();
    }

    $stmt->close();
    $objCon->close();
} else {
    header("Location: login.php");
    exit();
}
?>
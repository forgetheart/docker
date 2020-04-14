<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

检测MySQL连接<br>

<?php
$conn = new mysqli("172.16.1.2", "root", "123456");
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";
?>


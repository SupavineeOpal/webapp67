<?php
require 'conn.php';
$mid = $_GET['mid'];

// สร้างคำสั่ง SQL เพื่อลบข้อมูล
$sql = "DELETE FROM member WHERE mid = '$mid'";

// ดำเนินการลบข้อมูล
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: mainmenu.php"); // เปลี่ยนไปยังหน้าแสดงข้อมูลนักศึกษา
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
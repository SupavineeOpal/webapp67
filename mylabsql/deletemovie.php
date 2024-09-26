<?php
require 'conn.php';

// รับค่า ID ของนักศึกษาที่ต้องการลบจาก URL
$movid = $_GET['movid'];

// สร้างคำสั่ง SQL เพื่อลบข้อมูล
$sql = "DELETE FROM movie WHERE movid = '$movid'";

// ดำเนินการลบข้อมูล
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: moviemainmenu.php"); // เปลี่ยนไปยังหน้าแสดงข้อมูลนักศึกษา
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
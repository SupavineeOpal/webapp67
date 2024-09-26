<?php
require 'conn.php';
$aid = $_GET['aid'];
$sql = "DELETE FROM actor WHERE aid = '$aid'";

// ดำเนินการลบข้อมูล
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: actormainmenu.php"); // เปลี่ยนไปยังหน้าแสดงข้อมูลนักศึกษา
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
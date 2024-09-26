<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="styleactor.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EditActor </title>
</head>
<body>
<?php
        if(!isset($_GET['aid'])){
            header("refresh: 0; url=actormainmenu.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM actor WHERE aid='$_GET[aid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
<form method="post" action="editactorsuccess.php">
        <p>
            <label>รหัสนักแสดง</label>
            <br>
            <input type="text" name="aid" id="aid" value="<?=$row['aid'];?>">
        </p>
        <p>
            <label>ชื่อ</label>
            <br>
            <input type="text" name="aname" id="aname" value="<?=$row['aname'];?>" />
        </p>
        <p>
            <label>นามสกุล</label>
            <br>
            <input type="text" name="alastname" id="alastname" value="<?=$row['alastname'];?>" />
        </p>
        <p>
            <label>ที่อยู่</label>
            <br>
            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />
        </p>
        <p>
            <label>เบอร์โทร</label>
            <br>
            <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" />
        </p>
        <br>
        <input class="a" type="submit" value="บันทึก">
    </form>
    <br>
    <a href='actormainmenu.php'><button> Home</button></a>

</body>
</html>
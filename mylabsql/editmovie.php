<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="stylemovie.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editmovie </title>
</head>
<body>
<?php
        if(!isset($_GET['movid'])){
            header("refresh: 0; url=moviemainmenu.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM movie WHERE movid='$_GET[movid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
<form method="post" action="editmoviesuccess.php">
        <p>
            <label>รหัสหนัง</label>
            <br>
            <input type="text" name="movid" id="movid" value="<?=$row['movid'];?>">
        </p>
        <p>
            <label>ชื่อ</label>
            <br>
            <input type="text" name="movname" id="movname" value="<?=$row['movname'];?>" />
        </p>
        <p>
            <label>รายระเอียดหนัง</label>
            <br>
            <input type="text" name="movinformation" id="movinformation" value="<?=$row['movinformation'];?>" />
        </p>
        <p>
            <label>ระยะเวลา</label>
            <br>
            <input type="text" name="time" id="time" value="<?=$row['time'];?>" />
        </p>
        <p>
            <label>วันที่หนังเข้า</label>
            <br>
            <input type="date" name="date" id="date" value="<?=$row['date'];?>" />
        </p>
        <br>
        <input class="a" type="submit" value="บันทึก">
    </form>
    <br>
    <a href='moviemainmenu.php'><button> Home</button></a>

</body>
</html>
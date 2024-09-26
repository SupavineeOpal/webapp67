<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="stylemovie.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show inseting data</title>
</head>
<body>
    <form method="post" action="insertmoviesuccess.php">
    <p>
        <label>รหัสหนัง</label>
        <br>
        <input type="text" name="movid" id="movid">
    </p>
        <p>
            <label>ชื่อ</label>
            <br>
            <input type="text" name="movname" id="movname">
        </p>
        <p>
            <label>ข้อมูลหนัง</label>
            <br>
            <input type="text" name="movinformation" id="movinformation">
        </p>
        <p>
            <label>ระยะเวลา</label>
            <br>
            <input type="text" name="time" id="time">
        </p>
        <p>
            <label>วันที่หนังเข้า</label>
            <br>
            <input type="date" name="date" id="date">
        </p>
        <br>
        <input class="a"type="submit" value="บันทึก">
    </form>
    <br>
    <a href='moviemainmenu.php'> <button> Home </button></a>

</body>
</html>
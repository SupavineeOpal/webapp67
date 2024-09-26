<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="styleactor.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show inseting data</title>
</head>
<body>
    <form method="post" action="insertactorsuccess.php">
    <p>
        <label>รหัสนักแสดง</label><br>
        <input type="text" name="aid" id="aid">
    </p>
        <p>
            <label>ชื่อ</label>
            <br>
            <input type="text" name="aname" id="aname">
        </p>
        <p>
            <label>นามสกุล</label>
            <br>
            <input type="text" name="alastname" id="alastname">
        </p>
        <p>
            <label>ที่อยู่</label>
            <br>
            <input type="text" name="address" id="address">
        </p>
        <p>
            <label>เบอร์โทร</label>
            <br>
            <input type="text" name="telephone" id="telephone">
        </p>
        <br>
        <input class="a" type="submit" value="บันทึก">
    </form>
    <br>
    <a href='actormainmenu.php'> <button> Home </button></a>

</body>
</html>
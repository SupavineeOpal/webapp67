<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="stylemember.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show inseting data</title>
</head>
<body>
    <form method="post" action="insertmembersuccess.php">
    <p>
        <label>รหัสสมาชิก</label>
        <input type="text" name="mid" id="mid">
    </p>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="mname" id="mname">
        </p>
        <p>
            <label>นามสกุล</label>
            <input type="text" name="mlastname" id="mlastname">
        </p>
        <p>
            <label>ที่อยู่</label>
            <input type="text" name="address" id="address">
        </p>
        <p>
            <label>เบอร์โทร</label>
            <input type="text" name="telephone" id="telephone">
        </p>
        <br>
        <input class="a" type="submit" value="บันทึก">
    </form>
    <br>
    <a href='mainmenu.php'> <button> Home </button></a>

</body>
</html>
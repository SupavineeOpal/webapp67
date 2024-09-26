<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="styleactor.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show insert data</title>
</head>
<body>
<?php
    require 'conn.php';
    $sql_update="INSERT INTO actor(aid,aname,alastname,address,telephone) VALUES ('$_POST[aid]','$_POST[aname]','$_POST[alastname]' ,'$_POST[address]' ,'$_POST[telephone]')";
    $result= $conn->query($sql_update);
    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    echo "Insert Success <br>";
    header("refresh: 1; url=actormainmenu.php");
    }
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="styleactor.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this weppage show editing data</title>
</head>
<body>
<?php
            require 'conn.php';
    $sql_update="UPDATE actor SET aname='$_POST[aname]',alastname='$_POST[alastname]' ,address='$_POST[address]' ,telephone='$_POST[telephone]' WHERE aid='$_POST[aid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=actormainmenu.php");
            }

        ?>

    
</body>
</html>
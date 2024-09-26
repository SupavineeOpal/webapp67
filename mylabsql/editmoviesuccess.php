<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="stylemovie.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this weppage show editing data</title>
</head>
<body>
<?php
            require 'conn.php';
    $sql_update="UPDATE movie SET movname='$_POST[movname]',movinformation='$_POST[movinformation]' ,time='$_POST[time]' ,date='$_POST[date]' WHERE movid='$_POST[movid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=moviemainmenu.php");
            }

        ?>

    
</body>
</html>
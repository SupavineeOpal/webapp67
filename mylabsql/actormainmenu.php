<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"  href="styleactor.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This show Actor information  </title>
</head>
<body>
    <?php
    require 'conn.php';
    $sql = "SELECT * FROM actor";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
    ?>
    <h1>Actor</h1><br> 
        <table>
            <thead>
                <tr>
                    <th>รหัสนักแสดง</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ที่อยู่</th>
                    <th>เบอร์โทร</th>
                    <th> ธุรกรรม </th>
                    <th> ลบข้อมูล </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["aid"]."</td>"."<td>".$row["aname"]." ".$row["alastname"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["telephone"]."</td>"."<td>"."<a href='editactor.php?aid=".$row["aid"]."'><button> Edit </button></a>"."</td>"."<td>"."<a href='deleteactor.php?aid=".$row["aid"]."'><button> Delete </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <br>
        <a href='insertactor.php'><button> Insert Actor </button></a>
        <br><br>
        <a href='Amain.php'><button> Back </button></a>
</body>
</html>
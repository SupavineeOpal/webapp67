<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"  href="stylemember.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This show Member information  </title>
</head>
<body>
    <?php
    require 'conn.php';
    $sql = "SELECT * FROM member";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
    ?>
    <h1>Member</h1><br> 
        <table>
            <thead>
                <tr>
                    <th>รหัสสมาชิก</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ที่อยู่</th>
                    <th>เบอร์โทร</th>
                    <th> ธุรกรรม </th>
                    <th> ลบข้อมูล </th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["mid"]."</td>"."<td>".$row["mname"]." ".$row["mlastname"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["telephone"]."</td>"."<td>"."<a href='editmember.php?mid=".$row["mid"]."'><button> Edit </button></a>"."</td>"."<td>"."<a href='deletemember.php?mid=".$row["mid"]."'><button> Delete </button></a>"."</td>";
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
        <a href='insertmember.php'><button> Insert Member </button></a>
        <br><br>
        <a href='Amain.php'><button> Back </button></a>
</body>
</html>

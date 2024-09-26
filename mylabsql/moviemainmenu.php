<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"  href="stylemovie.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This show Movie information  </title>
</head>
<body>
    <?php
    require 'conn.php';
    $sql = "SELECT * FROM movie";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
    ?>
    <h1>Movie </h1><br> 
        <table>
            <thead>
                <tr>
                    <th> รหัสหนัง </th>
                    <th> ชื่อ </th>
                    <th> รายระเอียดหนัง </th>
                    <th> ระยะเวลา </th>
                    <th> วันที่หนังเข้า </th>
                    <th> ธุรกรรม </th>
                    <th> ลบข้อมูล </th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["movid"]."</td>"."<td>".$row["movname"]."</td>"."<td>".$row["movinformation"]."</td>"."<td>".$row["time"]."</td>"."<td>".$row["date"]."</td>"."<td>"."<a href='editmovie.php?movid=".$row["movid"]."'><button> Edit </button></a>"."</td>"."<td>"."<a href='deletemovie.php?movid=".$row["movid"]."'><button> Delete </button></a>"."</td>";
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
        <a href='insertmovie.php'><button> Insert Movie</button></a>
        <br><br>
        <a href='Amain.php'><button> Back </button></a>
</body>
</html>
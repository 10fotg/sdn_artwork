<?php
$stmt = mysqli_connect("localhost", "sdnartwork", "YY_h025194166", "sdn_artwork");
$query = "SELECT * FROM sp_product ORDER BY id asc";
$result = mysqli_query($stmt, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table/sdn/artwork</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1 class="justify-content-center">SDN/ArtWork</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>รหัส</th>
                <th>ชื่อ</th>
                <th>รูป</th>
                <th>รายละเอียด</th>
                <th>ประเภท</th>
                <th>ไฟล์</th>
                <th>ลบข้อมูล</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $row['id'] ;?></td>
                <td><?php echo $row['name'] ;?></td>
                <td><?php echo $row['img'] ;?></td>
                <td><?php echo $row['description'] ;?></td>
                <td><?php echo $row['type'] ;?></td>
                <td><?php echo $row['filezip'] ;?></td>            
                <td>
                <a href="deleteQueryString.php?id=<?php echo $row["id"];?>" class="btn btn-danger">ลบข้อมูล</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    </table>
    </div> 
</body>
</html>


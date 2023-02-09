<?php

$db_host = 'localhost';
$db_name = 'sdn_artwork';
$db_user = 'root';
$db_pass = '';

    try {
        $obj = new PDO("mysql:host=${db_host}; dbname=${db_name}", $db_user, $db_pass);
        $sql="SELECT * FROM sp_product";
        $result=$obj->query($sql);
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "ลำดับ=".$row["id"]."<br>";
            echo "รูป=".$row["img"]."<br>";
            // echo "ราคา=".$row["price"]."<br>";
            echo "รายละเอียด=".$row["description"]."<br>";
            echo "ประเภท=".$row["type"]."<br>";
            echo "ไฟล์=".$row["filezip"]."<br>";
            echo "<hr>";

        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

?> 
<?php
 $stmt = mysqli_connect("localhost", "sdnartwork", "YY_h025194166", "sdn_artwork");


$idele= $_GET ["id"];


$query = "DELETE FROM sp_product WHERE id =$idele";
$result = mysqli_query($stmt, $query);

if($result){
    echo "ลบข้อมูลเรียบร้อย <br>";
    

}else{
    echo "เกิดข้อผิดพลาด";
}

?>



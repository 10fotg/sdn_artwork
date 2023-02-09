<?php
    $db_host = 'localhost';
    $db_name = 'sdn_artwork';
    $db_user = 'root';
    $db_pass = '';
    // $stmt = mysqli_connect("localhost", "sdnartwork", "YY_h025194166", "sdn_artwork");
    header('Content-Type: application/json');
    date_default_timezone_set("Asia/Bangkok");

    try {
        $db = new PDO("mysql:host=${db_host}; dbname=${db_name}", $db_user, $db_pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "database is connected";
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
?>
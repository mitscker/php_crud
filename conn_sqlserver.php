<?php 

    // configurate access data to database
    $db_user = "php_user";
    $pass_user = "php_password";

    $dsn = "sqlsrv:Server=MITSCKER\\SQLEXPRESS;Database=notas_php"; $db_user;$pass_user;

    try {
        $conn = new PDO($dsn);

        // show messsage for sucess conection
        // if($conn) {
        //     echo "connected to db";
        // } else {
        //     echo "Not connected to db";
        // }
    } catch (PDOException $e) {
        // show message error
        echo $e->getMessage();
    }

?>
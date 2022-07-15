<?php 

    // configurate access data to database
    $db_user = "mitscker";
    $pass_user = "mits357";

    $dns = "sqlsrv:Server=mitscker\\SQLEXPRESS02;Database=notas_php"; $db_user;$pass_user;

    try {
        $conn = new PDO($dns);

        // show messsage for sucess conection
        if($conn) {
            echo "connected to db";
        } else {
            echo "Not connected to db";
        }
    } catch (PDOException $e) {
        // show message error
        echo $e->getMessage();
    }

?>
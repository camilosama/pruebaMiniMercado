<?php
    include('config.ini.php');
    $sql = "SELECT *  FROM productos ORDER BY stock asc";
    $result = mysqli_query($conn, $sql);
    $conn->close();
?>
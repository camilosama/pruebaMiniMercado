<?php
    include('config.ini.php');
    $sql = "SELECT * FROM productos  WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $data=mysqli_fetch_assoc($result);
    $id=$data['id'];
    $nombre=$data['nombre'];
    $referencia=$data['referencia'];
    $precio=$data['precio'];
    $peso=$data['peso'];
    $categoria=$data['categoria'];
    $stock=$data['stock'];
    $conn->close();
?>
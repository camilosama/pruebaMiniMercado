<?php
    include('config.ini.php');
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $referencia=$_POST['referencia'];
    $precio=$_POST['precio'];
    $peso=$_POST['peso'];
    $categoria=$_POST['categoria'];
    $stock=$_POST['stock'];
    
    $sql = "UPDATE productos set
    nombre='$nombre',referencia='$referencia',precio=$precio,peso=$peso,
    categoria='$categoria',stock=$stock
    where id=$id";

    if (mysqli_multi_query($conn, $sql)) {
      echo "New records created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>
<?php
    include('config.ini.php');
    $nombre=$_POST['nombre'];
    $referencia=$_POST['referencia'];
    $precio=$_POST['precio'];
    $peso=$_POST['peso'];
    $categoria=$_POST['categoria'];
    $stock=$_POST['stock'];

    $sql = "INSERT INTO productos 
    (nombre, referencia, precio,peso,categoria,stock) 
    VALUES 
    ('$nombre','$referencia',$precio,$peso,'$categoria',$stock);";

    if (mysqli_multi_query($conn, $sql)) {
      echo "New records created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>
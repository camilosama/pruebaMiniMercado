<?php

include('config.ini.php');

$id = $_POST['id'];
$stockA = $_POST['stockA'];
$stock = $_POST['stock'];
$resta = $_POST['resta'];
$sql = "UPDATE productos SET stock=$resta WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

$sql = "INSERT INTO ventas (id, stock_actual) VALUES ($id,$stock)";
if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
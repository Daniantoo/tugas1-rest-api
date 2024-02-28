<?php

require_once('helper.php');

$matkul = $_POST['mata_kuliah'];

$query = "INSERT INTO matkul(mata_kuliah) VALUES ('$matkul')";
$sql = mysqli_query($db_connect, $query);

if ($sql) {
    echo json_encode ( array('message' => 'created'));
}
else {
    echo json_encode ( array('message' => 'error'));
}


?>
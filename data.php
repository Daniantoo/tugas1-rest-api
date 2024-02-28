<?php

require_once('helper.php');

$query = "SELECT * FROM matkul ORDER BY id ASC";
$sql = mysqli_query($db_connect, $query);

if ($sql) {

    $result = array();
    while ($row = mysqli_fetch_array($sql)) {
        array_push( $result, array(
        'id' => $row['id'],
        'mata_kuliah' => $row['mata_kuliah'],
        ));
    }
}

# code...
    echo json_encode ( array('mata kuliah' => $result));

?>
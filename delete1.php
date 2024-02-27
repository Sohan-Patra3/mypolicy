<?php
include 'partials/_dbconnect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];

    // Query to delete the record from the database
    $sql = "DELETE FROM `plc_mst` WHERE sno = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo 1; // Success
    } else {
        echo 0; // Failure
    }
}
?>

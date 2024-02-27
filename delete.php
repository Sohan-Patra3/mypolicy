<?php
// Check if the sno parameter is set and not empty
if(isset($_POST['sno']) && !empty($_POST['sno'])) {
    // Assuming you have a database connection already established
    // Replace 'your_database_hostname', 'your_database_username', 'your_database_password', and 'your_database_name' with your actual database credentials
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mypolicy";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare a SQL statement to delete the item based on sno
    $sno = $_POST['sno'];
    $sql = "DELETE FROM `memb_mst` WHERE sno = ?";

    if($stmt = $conn->prepare($sql)) {
        // Bind the sno parameter as a string
        $stmt->bind_param("s", $sno);

        // Attempt to execute the prepared statement
        if($stmt->execute()) {
            // If deletion is successful, send a success response
            echo "Item with sno $sno deleted successfully.";
        } else {
            // If an error occurs during deletion, send an error response
            echo "Error deleting item with sno $sno: " . mysqli_error($conn);
        }

        // Close statement
        $stmt->close();
    } else {
        // If the SQL statement preparation fails, send an error response
        echo "Error preparing SQL statement: " . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    // If the sno parameter is not set or empty, send an error response
    echo "Error: Sno parameter is missing or empty.";
}
?>

<?php
include 'partials/_dbconnect.php';
session_start();
$sno = $_GET['sno'];
$sno = base64_encode(urldecode($sno));
$snoi = $_GET['snoi'];
$snoi = base64_decode(urldecode($snoi));
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['snoi'])) {
    $snoi = $_POST['snoi'];
    $name = $_POST['name'];
    $policyNumber = $_POST['policyNumber'];
    $policyDate = $_POST['policyDate'];
    $policyAmount = $_POST['policyAmount'];
    $policyMaturity = $_POST['policyMaturity'];
    $policyTerm = $_POST['policyTerm'];
    $policyPremium = $_POST['policyPremium'];
    $nomineeName = $_POST['nomineeName'];
    $sql = "UPDATE `plc_mst` SET `name`='$name' , `policyNumber`='$policyNumber' , `policyDate`='$policyDate' , `policyAmount`='$policyAmount' , `policyTerm` = '$policyTerm' , `policyPremium` = '$policyPremium' , `nomineeName` = '$nomineeName' WHERE sno=$snoi";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Redirect to index.php or any other page after successful update
        header("location: /mypolicy/index.php?sno=$sno");
        exit;
    } else {
        // Handle error
        echo "Error updating policy: " . mysqli_error($conn);
    }
} else {
    header("location: /mypolicy/index.php?sno=$sno"); // Redirect if snoi is not provided
    exit;
}
?>

<?php
include 'partials/_dbconnect.php';
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: /mypolicy/login.php");
    exit;
}
$sno = $_GET['sno'];
$snoi = $_GET['snoi'];
$snoi = base64_decode(urldecode($snoi));

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['snoi'])) {
    $snoi = $_GET['snoi'];
    $snoi = base64_decode(urldecode($snoi));
    $sql = "SELECT * FROM `plc_mst` WHERE sno = $snoi";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    header("location: /mypolicy/index.php?sno=$sno"); // Redirect if snoi is not provided
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Policy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Edit Policy</h2>
        <form action="update_policy.php?sno=<?php echo $sno ?>&snoi=<?php echo $snoi ?>" method="post">
            <input type="hidden" name="snoi" value="<?php echo $row['sno']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
            </div>
            
            <div class="col-md-12 ">
                        <label for="policyname">Policy Number</label>
                        <input type="number" class="form-control" name="policyNumber" id="policyNumber" placeholder="Policy Number" value="" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <label for="policydate">Policy Date</label>
                        <input type="date" class="form-control" name="policyDate" id="policyDate" placeholder="Policy Date" value="" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <label for="policyamount">Policy Amount</label>
                        <input type="number" class="form-control" name="policyAmount" id="policyAmount" placeholder="Policy Number" value="" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <label for="ploicymaturity">Policy Maturity Date</label>
                        <input type="date" class="form-control" name="policyMaturity" id="policyMaturity" placeholder="Policy Maturity Date" value="" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <label for="policyterm">Policy Term</label>
                        <input type="text" class="form-control" name="policyTerm" id="policyTerm" placeholder="Policy Term" value="" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <label for="policypremium">Policy Premium</label>
                        <input type="number" class="form-control" name="policyPremium" id="policyPremium" placeholder="Policy Premium" value="" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <hr>

                    <div class="col-md-12 ">
                        <label for="nomineename">Nominee Name</label>
                        <input type="text" class="form-control" name="nomineeName" id="nomineeName" placeholder="Nominee Name" value="" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
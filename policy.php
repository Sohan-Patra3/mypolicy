<?php

include 'partials/_dbconnect.php';

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: /mypolicy/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        #side_nav {
            background-color: black;
            min-width: 250px;
            min-width: 250px;
            transition: all 0.5s;
        }

        .content {
            min-height: 100vh;
            width: 100%;
        }

        hr.h-color {
            background: white;
        }

        .sidebar li.active {
            background-color: white;
            border-radius: 8px;
        }

        .sidebar li.active a,
        .sidebar li.active a:hover {
            color: black;
        }

        .sidebar li a {
            color: white;
        }

        @media(max-width: 767px) {
            #side_nav {
                margin-left: -250px;
                position: fixed;
                min-height: 100vh;
                z-index: 1;
            }

            #side_nav.active {
                margin-left: 0;
            }
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $policyNumber = $_POST['policyNumber'];
        $policyDate = $_POST['policyDate'];
        $policyAmount = $_POST['policyAmount'];
        $policyMaturityDate = $_POST['policyMaturity'];
        $policyTerm = $_POST['policyTerm'];
        $policyPremium = $_POST['policyPremium'];
        $premiumTime = $_POST['premiumTime'];
        $nomineeName = $_POST['nomineeName'];
        $nomineeRelation = $_POST['nomineeRelation'];
        $nomineeDob = $_POST['nomineeDob'];


        $sqli = "SELECT * FROM `plc_mst` WHERE policyNumber='$policyNumber'";
        $result1 = mysqli_query($conn, $sqli);
        $nums = mysqli_num_rows($result1);
        if ($nums > 0) {
            $showError = '<div class="alert alert-danger alert-dismissible fade show body2" role="alert">
            <strong>Policy Number Alreday Exits!!</strong>
          </div>';
        } 
        else {
            $sql = "INSERT INTO `plc_mst` (`name` , `policyNumber` , `policyDate` , `policyAmount` , `policyMaturityDate` , `policyTerm` , `policyPremium` , `premiumTime` , `nomineeName` , `nomineeRelation` , `nomineeDob` , `date`) VALUES ('$name','$policyNumber' , '$policyDate' , '$policyAmount' , '$policyMaturityDate' , '$policyTerm' , '$policyPremium' , '$premiumTime' , '$nomineeName' , '$nomineeRelation' , '$nomineeDob' , current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show body2" role="alert">
              <strong>Successful!!</strong>
            </div>';
            } else {
                mysqli_connect_errno();
            }
        }
        echo $showError;
    }
    ?>
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <h1 class="fs-4"><span class="text-dark rounded shadow px-2 me-2">
                        <span class="text-white"> myPolicy</span>
                </h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-text-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                    </svg></button>
            </div>
            <ul class="header-box px-2 pt-2 pb-4">
                <li class="active"><a href="/mypolicy/index.php" class="text-decoration-none px-2 py-2 d-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                        </svg>Dashboard</a></li>
                <li><a href="/mypolicy/policy.php" class="text-decoration-none px-2 py-2 d-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                        </svg>Add Policy</a></li>
                <li><a href="/mypolicy/policyDetails.php" class="text-decoration-none px-2 py-2 d-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-down" viewBox="0 0 16 16">
                            <path d="M7.646.146a.5.5 0 0 1 .708 0L10.207 2H14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h3.793zM1 7v3h14V7zm14-1V4a1 1 0 0 0-1-1h-3.793a1 1 0 0 1-.707-.293L8 1.207l-1.5 1.5A1 1 0 0 1 5.793 3H2a1 1 0 0 0-1 1v2zm0 5H1v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 4.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5" />
                        </svg>Policy Details</a></li>
                <li><a href="#" class="text-decoration-none px-2 py-2 d-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m-.5 5a.5.5 0 0 1 1 0v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5z" />
                        </svg>Services</a></li>
                <li><a href="#" class="text-decoration-none px-2 py-2 d-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>costomers</a></li>
            </ul>

            <hr class="h-color mx-2">

            <ul class="list-unstyled">
                <li><a href="#" class="text-decoration-none px-2 py-2 d-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-snow3" viewBox="0 0 16 16">
                            <path d="M8 7.5a.5.5 0 1 0 0 1 .5.5 0 0 0 0-1" />
                            <path d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793v-1.51l-2.053-1.232-1.348.778-.495 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.883-.237a.5.5 0 1 1 .258-.966l1.85.495L5 9.155v-2.31l-1.4-.808-1.85.495a.5.5 0 1 1-.259-.966l.884-.237-1.12-.646a.5.5 0 0 1 .5-.866l1.12.646-.237-.883a.5.5 0 1 1 .966-.258l.495 1.849 1.348.778L7.5 4.717v-1.51L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 0 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v1.51l2.053 1.232 1.348-.778.495-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495-1.4.808v2.31l1.4.808 1.849-.495a.5.5 0 1 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-1.348-.778L8.5 11.283v1.51l1.354 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5m2-6.783V6.783l-2-1.2-2 1.2v2.434l2 1.2z" />
                        </svg>settings</a></li>
                <li><a href="#" class="text-decoration-none px-2 py-2 d-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-snow3" viewBox="0 0 16 16">
                            <path d="M8 7.5a.5.5 0 1 0 0 1 .5.5 0 0 0 0-1" />
                            <path d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793v-1.51l-2.053-1.232-1.348.778-.495 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.883-.237a.5.5 0 1 1 .258-.966l1.85.495L5 9.155v-2.31l-1.4-.808-1.85.495a.5.5 0 1 1-.259-.966l.884-.237-1.12-.646a.5.5 0 0 1 .5-.866l1.12.646-.237-.883a.5.5 0 1 1 .966-.258l.495 1.849 1.348.778L7.5 4.717v-1.51L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 0 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v1.51l2.053 1.232 1.348-.778.495-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495-1.4.808v2.31l1.4.808 1.849-.495a.5.5 0 1 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-1.348-.778L8.5 11.283v1.51l1.354 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5m2-6.783V6.783l-2-1.2-2 1.2v2.434l2 1.2z" />
                        </svg>notifications</a></li>
            </ul>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div class="d-flex jusfify-content-between d-md-none d-block">
                        <a class="navbar-brand fs-4" href="/mypolicy">myPolicy</a>
                        <button class="btn px-1 py-0 open-btn"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-text-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                            </svg></button>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/mypolicy/index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/mypolicy/member.php">Members</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="\mypolicy\list.php">List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/mypolicy/memberlist.php">Member List</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <a class="btn btn-outline-success" href="/mypolicy/logout.php">Logout</a>
                        </form>
                    </div>
                </div>
            </nav>
            <?php
            $sql = "SELECT * FROM `memb_mst`";
            $result = mysqli_query($conn, $sql);
            ?>
            <div class="container bodyDiv my-4">
                <form class="needs-validation" novalidate="" action="/mypolicy/policy.php" method="post">
                    <div class="col-md-12 ">
                        <label for="name">Name</label>
                        <select class="form-control form-control-sm" id="name" name="name">
                            <option value="">Select Name</option>
                            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                <option value="<?php echo $row['sno']; ?>-<?php echo $row['firstname']; ?>"><?php echo $row['firstname']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="col-md-12 ">
                        <label for="policyname">Policy Number</label>
                        <input type="number" class="form-control" name="policyNumber" id="policyNumber" placeholder="Policy Number" value="" required="">
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <label for="policydate">Policy Date</label>
                        <input type="date" class="form-control" name="policyDate" id="policyDate" placeholder="Policy Date" value="" required="">
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <label for="policyamount">Policy Amount</label>
                        <input type="number" class="form-control" name="policyAmount" id="policyAmount" placeholder="Policy Number" value="" required="">
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <label for="ploicymaturity">Policy Maturity Date</label>
                        <input type="date" class="form-control" name="policyMaturity" id="policyMaturity" placeholder="Policy Maturity Date" value="" required="">
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <label for="policyterm">Policy Term</label>
                        <input type="text" class="form-control" name="policyTerm" id="policyTerm" placeholder="Policy Term" value="" required="">
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <label for="policypremium">Policy Premium</label>
                        <input type="number" class="form-control" name="policyPremium" id="policyPremium" placeholder="Policy Premium" value="" required="">
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <label for="premium time" class="form-label">Premium Time</label>
                        <select class="form-control" id="premiumTime" name="premiumTime">
                            <option value="">Select option</option>
                            <option value="monthly">Monthly</option>
                            <option value="quaterly">Quaterly</option>
                            <option value="halfyearly">Half Yearly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </div>


                    <hr>

                    <div class="col-md-12 ">
                        <label for="nomineename">Nominee Name</label>
                        <input type="text" class="form-control" name="nomineeName" id="nomineeName" placeholder="Nominee Name" value="" required="">
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <label for="nomineerelation" class="form-label">Relation With Nominee</label>
                        <select class="form-control" id="nomineeRelation" name="nomineeRelation">
                            <option value="">Select option</option>
                            <option value="father">Father</option>
                            <option value="mother">Mother</option>
                            <option value="wife">Wife</option>
                            <option value="son">Son</option>
                            <option value="daughter">Daughter</option>
                            <option value="daughter">Brother</option>
                            <option value="daughter">Sister</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="col-md-12 ">
                        <label for="nomineedob">Nominee DOB</label>
                        <input type="date" class="form-control" name="nomineeDob" id="nomineeDob" placeholder="Nominee Dob" value="" required="">
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <button class=" btn btn-primary btn-lg my-3 btn1" type="submit">submit</button>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".sidebar ul li").on('click', function() {
            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');
        })
        $('.open-btn').on('click', function() {
            $('.sidebar').addClass('active');
        })
        $('.close-btn').on('click', function() {
            $('.sidebar').removeClass('active');
        })
    </script>
    <hr>
    <?php include 'partials/_footer.php' ?>
</body>

</html>
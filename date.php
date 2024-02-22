<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "mypolicy";

$conn = mysqli_connect($server , $username , $password , $database);

if(!$conn){
    die("not connect").mysqli_connect_errno();
}

$date = date("20y-m-d");
$today = substr($date,5);
echo $today;

$sql = "SELECT * FROM `memb_mst`";
$result = mysqli_query($conn , $sql);
while($row = mysqli_fetch_assoc($result)){
    $date = $row['dob'];
    $dob = substr($date,5);
    $name = $row['firstname'];
    $doa = $row['doa'];
    if($dob===$today){
        echo "$name's birthday is today $date";
        echo"<br>";
    }

    if($doa === $today){
        echo"$name's anniversery is today $doa";
        echo "<br>";
    }
}


?>
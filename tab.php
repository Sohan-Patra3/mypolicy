<!DOCTYPE html>
<html>
<head>
    <title>Birthday & Anniversary Greetings</title>
</head>
<body>

<form method="post">
    <input type="submit" name="birthday" value="Birthday">
    <input type="submit" name="anniversary" value="Anniversary">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["birthday"])) {
        echo "<p>Happy Birthday!</p>";
    } elseif (isset($_POST["anniversary"])) {
        echo "<p>Happy Anniversary!</p>";
    }
}
?>

</body>
</html>

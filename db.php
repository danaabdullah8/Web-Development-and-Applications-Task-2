<<?php
$host = "sql303.infinityfree.com";
$user = "if0_42482759";
$pass = "Dnna8989";
$db = "if0_42482759_users";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
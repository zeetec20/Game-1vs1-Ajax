<?php
$conn = mysqli_connect("localhost", "root", "toor", "chess");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
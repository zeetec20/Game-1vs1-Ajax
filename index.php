<?php
include("./asset/php/connection.php");
$result = mysqli_query($conn, "SELECT player FROM lobby");
$rowPlayer = mysqli_fetch_row($result);

if ($rowPlayer[0] == 0) {
    mysqli_query($conn, "UPDATE lobby SET player = 1");
    header("Location: ./player1/index.php");
}

if ($rowPlayer[0] == 1) {
    mysqli_query($conn, "UPDATE lobby SET player = 2");
    header("Location: ./player2/index.php");
}
?>
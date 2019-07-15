<?php
include('./connection');
$result = mysqli_query($conn, 'SELECT round FROM game WHERE id = 1');

if ($_GET['player'] == "Player 1") {
    mysqli_query($conn, "UPDATE game SET player1 = 1 WHERE round = $round");
}

if ($_GET['player'] == "Player 2") {
    mysqli_query($conn, "UPDATE game SET player2 = 1 WHERE round = $round");
}
?>
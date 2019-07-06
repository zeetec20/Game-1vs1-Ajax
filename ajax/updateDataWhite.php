<?php
include('connnection.php');
if ($playerOnline == "Player 1") {
    mysqli_query($conn, 'UPDATE dataPlayer SET player = 1 WHERE name = "white"');
} else if ($playerOnline == "Player 2") {
    mysqli_query($conn, 'UPDATE dataPlayer SET player = 2 WHERE name = "white"');
}
?>

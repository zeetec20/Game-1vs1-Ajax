<?php
include('./connection.php');
mysqli_query($conn, "UPDATE preparation SET ready = 1 WHERE player = 'player1'")
?>
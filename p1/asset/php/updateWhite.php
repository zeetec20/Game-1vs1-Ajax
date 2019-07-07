<?php
include('./connection.php');
mysqli_query($conn, 'UPDATE dataPlayer SET player = 1 WHERE name = "white"');
?>
<?php
include('../asset/php/connnection.php');
mysqli_query($conn, 'UPDATE dataPlayer SET player = 2 WHERE name = "black"');
?>

<?php
include('connnection.php');
mysqli_query($conn, 'UPDATE dataPlayer SET player = 1 WHERE name = "black"');
echo"gfh";
?>

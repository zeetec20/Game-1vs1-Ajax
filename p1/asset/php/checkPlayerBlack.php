<?php
include('./connection.php');
$resultPlayerBlack = mysqli_query($conn, 'SELECT player FROM dataPlayer WHERE name = "black"');
$rowPlayerBlack = mysqli_fetch_row($resultPlayerBlack);

if ($rowPlayerBlack[0] == 1) {
    echo '
    <h3>Black = Player 1</h3>
    ';
    echo '
    <script type="text/javascript" id="runscriptCheckBlack">
        console.log("Black = Player 1");
        playerBlack = 1;
    </script>
    ';
}
?>
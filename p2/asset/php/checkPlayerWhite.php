<?php
include('./connection.php');
$resultPlayerWhite = mysqli_query($conn, 'SELECT player FROM dataPlayer WHERE name = "white"');
$rowPlayerWhite = mysqli_fetch_row($resultPlayerWhite);

if ($rowPlayerWhite[0] == 1) {
    echo '
    <h3>White = Player 1</h3>
    ';
    echo '
    <script type="text/javascript" id="runscriptCheckWhite">
        console.log("White = Player 1");
        playerWhite = 1;
    </script>
    ';
}

if ($rowPlayerWhite[0] == 2) {
    echo '
    <h3>White = Player 2</h3>
    ';
    echo '
    <script type="text/javascript" id="runscriptCheckWhite">
        console.log("White = Player 2");
        playerWhite = 2;
    </script>
    ';
}
?>
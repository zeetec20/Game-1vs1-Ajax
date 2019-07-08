<?php
include('./connection.php');
$dataPlayerReady1 = mysqli_query($conn, 'SELECT ready FROM preparation WHERE player = "player1"');
$playerReady1 = mysqli_fetch_row($dataPlayerReady1);
$dataPlayerReady2 = mysqli_query($conn, 'SELECT ready FROM preparation WHERE player = "player2"');
$playerReady2 = mysqli_fetch_row($dataPlayerReady2);

if ($playerReady1[0] == 1 && $playerReady2[0] == 1) {
    echo'
    <br>
    <h1>Semua Sudah Ready</h1>
    <h2 id="timer">10</h2>
    <script type="text/javascript" id="runscript">
        gameStart = 1;
    </script>
    ';
}
?>
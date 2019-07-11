<?php
include('./connection.php');
$dataPlayerReady1 = mysqli_query($conn, 'SELECT ready FROM preparation WHERE player = "player1"');
$playerReady1 = mysqli_fetch_row($dataPlayerReady1);
$dataPlayerReady2 = mysqli_query($conn, 'SELECT ready FROM preparation WHERE player = "player2"');
$playerReady2 = mysqli_fetch_row($dataPlayerReady2);

echo '
<h1 id="warningReady"></h1>
';

if ($playerReady1[0] == 1 && $playerReady2[0] == 1) {
    echo'
    <br>
    <h2 id="timer">10</h2>
    <script type="text/javascript" id="runscript">
        document.getElementById("warningReady").innerHTML = "Semua sudah Ready";
        gameStart = 1;
    </script>
    ';
} else {
    if ($playerReady2[0] == 1) {
        echo '
        <script type="text/javascript" id="runscript">
            document.getElementById("warningReady").innerHTML ="Menunggu Player 1 ready...";
            document.getElementById("buttonReady").disabled = true;
        </script>
        ';
    }
    if ($playerReady1[0] == 1) {
        echo '
        <script type="text/javascript" id="runscript">
            document.getElementById("warningReady").innerHTML = "Player 1 sudah ready, dimohon segera ready";
        </script>
        ';
    }
}
?>
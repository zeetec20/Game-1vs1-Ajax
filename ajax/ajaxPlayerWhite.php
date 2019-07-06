<?php
include("../asset/php/connnection.php");
$dataPlayerWhite = mysqli_query($conn, "SELECT player FROM dataPlayer WHERE name = 'white'");
$playerWhite = mysqli_fetch_row($dataPlayerWhite);

if ($playerWhite[0] == 1) {
    $white = "Player 1";
    echo'
    <script type="text/javascript" id="runscript1">
        console.log("White = Player 1");
        playerWhite = 1;
    </script>
    ';
}
if ($playerWhite[0] == 2) {
    $white = "Player 2";
    echo'
    <script type="text/javascript" id="runscript1">
        console.log("White = Player 2");
        playerWhite = 2;
    </script>
    ';
}
?>
<h1 class="playerWhite"><?php echo $white; ?></h1>
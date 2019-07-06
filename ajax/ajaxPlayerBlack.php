<?php
include("../asset/php/connnection.php");
$dataPlayerBlack = mysqli_query($conn, "SELECT player FROM dataPlayer WHERE name = 'black'");
$playerBlack = mysqli_fetch_row($dataPlayerBlack);

if ($playerBlack[0] == 1) {
    $black = "Player 1";
    echo'
    <script type="text/javascript" id="runscript2">
        console.log("Black = Player 1");
        playerBlack = 1;
    </script>
    ';
}
if ($playerBlack[0] == 2) {
    $black = "Player 2";
    echo'
    <script type="text/javascript" id="runscript2">
        console.log("Black= Player 2");
        playerBlack = 2;
    </script>
    ';
}
?>
<h1 class="playerBlack"><?php echo $black; ?></h1>
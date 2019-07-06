<?php
session_start();
include("./asset/php/connnection.php");

$result1 = mysqli_query($conn, "SELECT * FROM lobby");
$playerActive = mysqli_fetch_row($result1);

if ($playerActive[0] == 0) {
    $query = "UPDATE lobby SET player = 1";
    mysqli_query($conn, $query);

    $playerOnline = "Player 1";
} else {
    $query = "UPDATE lobby SET player = 2";
    mysqli_query($conn, $query);

    $playerOnline = "Player 2";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="./asset/css/style.css">
    <script>
        var playerWhite = 0;
        var playerBlack = 0;
    </script>
</head>
<body>
    <h3><?php echo($playerOnline); ?></h4>
    <div class="timer">
        
    </div>

    <h1 class="title">Chess</h1>
    <h2 class="select">Silahkan Pilih Bidak</h2>

    <div class="buttonWhite">
        <a href="#" class="btnPlayer1 btnPlayer" id="btnPlayerWhite">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <h1>White</h1>
        </a>
        <div class="updateDataWhite" id="updateDataWhite">

        </div>
    </div>

    <div class="checkPlayerWhite" id="checkPlayerWhite">

    </div>

    <div class="buttonBlack">
        <a href="#" class="btnPlayer2 btnPlayer" id="btnPlayerBlack">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <h1>Black</h1>
        </a>
        <?php
        if ($playerOnline == "Player 1") {
            echo '
            <div class="updateDataBlack" id="updateDataBlack1">
    
            </div>
            ';
        }
        if ($playerOnline == "Player 2") {
            echo '
            <div class="updateDataBlack" id="updateDataBlack2">
    
            </div>
            ';
        }
        ?>
    </div>
    <div class="checkPlayerBlack" id="checkPlayerBlack">

    </div>

    <script src="./asset/js/script.js"></script>
    <script src="./asset/js/function.js"></script>
</body>
</html>
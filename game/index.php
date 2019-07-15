
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Batu Gunting Kertas</title>
    <link rel="stylesheet" href="./asset/css/style.css">
</head>
<body>
    <div class="firstData" id="firstData">
        <?php
        if ($_GET['player'] == "Player 1") {
            $enemy = "Player 2";
        }

        if ($_GET['player'] == "Player 2") {
            $enemy = "Player 1";
        }

        $round = 1;
        ?>
    </div>

    <h1 class="player"><?php echo $_GET['player']; ?></h1>

    <div class="warning">
        <h1>VS</h1>
        <br>
        <h2>Ronde: <?php echo $round;?></h2>
        <h2 class="countdown" id="countdown">10</h2>
    </div>

    <h1 class="enemy"><?php echo $enemy;?></h1>

    <div class="playerSelection">
        <h1>???</h1>
        <div>
            <div class="flipImg">
                <img src="./asset/img/questionSign.png" alt="">
                <img src="./asset/img/batu.png" alt="">
            </div>
        </div>
    </div>

    <div class="playerInteraction">

        <div class="playerSelect">

            <div class="batu bgk">
                <h2>Batu</h2>
                <img src="./asset/img/batu.png" alt="">
                <div id="updateDataBatu"></div>
            </div>

            <div class="gunting bgk">
                <h2>Gunting</h2>
                <img src="./asset/img/gunting.png" alt="">
                <div id="updateDataGunting"></div>
            </div>

            <div class="kertas bgk">
                <h2>Kertas</h2>
                <img src="./asset/img/kertas.png" alt="">
                <div id="updateDataKertas"></div>
            </div>

        </div>

    </div>

    <div class="enemySelection">
        <h2>???</h2>
        <div>
            <div class="flipImg">
                <img src="./asset/img/questionSign.png" alt="">
                <img src="./asset/img/batu.png" alt="">
            </div>
        </div>
    </div>

    <div class="enemyInteraction">

        <div class="enemySelect bgk">

            <div class="batu bgk">
                <h2>Batu</h2>
                <img src="./asset/img/batu.png" alt="">
            </div>

            <div class="gunting bgk">
                <h2>Gunting</h2>
                <img src="./asset/img/gunting.png" alt="">
            </div>

            <div class="kertas bgk">
                <h2>Kertas</h2>
                <img src="./asset/img/kertas.png" alt="">
            </div>

        </div>
        
    </div>

    <script src="./asset/js/script.js"></script>
</body>
</html>
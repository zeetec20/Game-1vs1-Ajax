<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
    var playerWhite = 0;
    var playerBlack = 0;
    var timer = 0;
    var gameStart = 0;
    var ready = 0;
    </script>
    
    <h1>PLAYER 1</h1>
    <h1>Silahkan Pilih Bidak</h1>

    <button id="buttonWhite">PUTIH</button>
    <button id="buttonBlack">BLACK</button>

    <div class="updateWhite" id="updateWhite"></div>
    <div class="updateBlack" id="updateBlack"></div>

    <div class="checkPlayerWhite" id="checkPlayerWhite"></div>
    <div class="checkPlayerBlack" id="checkPlayerBlack"></div>

    <button id="buttonReady">Ready</button>
    <br>
    <div id="ready">
        <div id="updateReady"></div>
        <div id="gameStart"></div>
    </div>

    <script src="./asset/js/function.js"></script>
    <script src="./asset/js/script.js"></script>
</body>
</html>
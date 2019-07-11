
function timerStart(params) {
    var cooldown = 10;
    var timerStart = setInterval(() => {
        cooldown--;
        document.getElementById('timer').innerHTML = cooldown;
        if (cooldown == 0) {
            gameStart = 2;
            clearInterval(timerStart);
            document.getElementById('timer').innerHTML = cooldown;
            window.location.href = "http://localhost/Game-CoOp-With-Ajax/game/index.php?player=player%201";
        }
    }, 1000);
}

function checkPlayerReady(params) {
    var checkPlayerReady = setInterval(() => {
        xhr5.onreadystatechange = function (params) {
            if (xhr5.readyState == 4 && xhr5.status == 200) {
                document.getElementById('gameStart').innerHTML = xhr5.responseText;
                eval(document.getElementById("runscript").innerHTML);
            }
        }

        var src = "../p1/asset/php/checkReady.php";
        xhr5.open('GET', src, true);
        xhr5.send();

        if (gameStart == 1) {
            clearInterval(checkPlayerReady);
            document.getElementById('buttonReady').disabled = true;
            timerStart();
        }
    }, 1);
}
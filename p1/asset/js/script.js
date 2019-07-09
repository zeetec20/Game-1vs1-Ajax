var xhr1 = new XMLHttpRequest;
var xhr2 = new XMLHttpRequest;
var xhr3 = new XMLHttpRequest;
var xhr4 = new XMLHttpRequest;
var xhr5 = new XMLHttpRequest;
var xhr6 = new XMLHttpRequest;
var buttonWhite = document.getElementById("buttonWhite");
var buttonBlack = document.getElementById("buttonBlack");
var buttonReady = document.getElementById("buttonReady");

buttonWhite.addEventListener('click', function() {
    document.getElementById('buttonWhite').disabled = true;
    xhr1.onreadystatechange = function (params) {
        if (xhr1.readyState == 4 && xhr1.status == 200) {
            document.getElementById("updateWhite").innerHTML = xhr1.responseText;
            // eval(document.getElementById("runscript1").innerHTML);
        }
    }

    var src = "../p1/asset/php/updateWhite.php";
    xhr1.open('GET', src, true);
    xhr1.send();
})

buttonBlack.addEventListener('click', function() {
    document.getElementById('buttonBlack').disabled = true;
    xhr2.onreadystatechange = function (params) {
        if (xhr2.readyState == 4 && xhr2.status == 200) {
            document.getElementById("updateBlack").innerHTML = xhr2.responseText;
            // eval(document.getElementById("runscript1").innerHTML);
        }
    }

    var src = "../p1/asset/php/updateBlack.php";
    xhr2.open('GET', src, true);
    xhr2.send();
})

var checkPlayerWhite = setInterval(() => {
    xhr3.onreadystatechange = function (params) {
        if (xhr3.readyState == 4 && xhr3.status == 200) {
            document.getElementById("checkPlayerWhite").innerHTML = xhr3.responseText;
            eval(document.getElementById("runscriptCheckWhite").innerHTML);
        }
    }

    var src = "../p1/asset/php/checkPlayerWhite.php";
    xhr3.open('GET', src, true);
    xhr3.send();

    if (playerWhite != 0) {
        clearInterval(checkPlayerWhite);
        disabledButtonWhite();
        ready = ready + 1;
        if (ready == 2) {
            checkPlayerReady();
        }
    }
}, 10);

var checkPlayerBlack = setInterval(() => {
    xhr4.onreadystatechange = function (params) {
        if (xhr4.readyState == 4 && xhr4.status == 200) {
            document.getElementById("checkPlayerBlack").innerHTML = xhr4.responseText;
            eval(document.getElementById("runscriptCheckBlack").innerHTML);
        }
    }

    var src = "../p1/asset/php/checkPlayerBlack.php";
    xhr4.open('GET', src, true);
    xhr4.send();
    
    if (playerBlack != 0) {
        clearInterval(checkPlayerBlack);
        disabledButtonBlack();
        ready = ready + 1;
        if (ready == 2) {
            checkPlayerReady();
        }
    }
}, 10);

buttonReady.addEventListener('click', function () {
    buttonReady.disabled = true;
    xhr6.onreadystatechange = function (params) {
        if (xhr6.readyState == 4 && xhr6.status == 200) {
            document.getElementById('updateReady').innerHTML = xhr6.responseText;
            // eval(document.getElementById("runscript").innerHTML);
        }
    }

    var src = "../p1/asset/php/ready.php";
    xhr6.open('GET', src, true);
    xhr6.send();
})

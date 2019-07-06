var btnPlayerWhite = document.getElementById("btnPlayerWhite");
var btnPlayerBlack = document.getElementById("btnPlayerBlack");
var xhr1 = new XMLHttpRequest;
var xhr2 = new XMLHttpRequest;
var xhr3 = new XMLHttpRequest;
var xhr4 = new XMLHttpRequest;
var xhr4a = new XMLHttpRequest;
var playerWhite = 0;


var intervaCheckPlayerWhite = setInterval(() => {
    xhr1.onreadystatechange = function (params) {
        if (xhr1.readyState == 4 && xhr1.status == 200) {
            document.getElementById("checkPlayerWhite").innerHTML = xhr1.responseText;
            eval(document.getElementById("runscript1").innerHTML);
        }
    }

    var src = "ajax/ajaxPlayerWhite.php";
    xhr1.open('GET', src, true);
    xhr1.send();
    if (playerWhite != 0) {
        clearInterval(intervaCheckPlayerWhite);
    }
}, 10);

var intervaCheckPlayerBlack = setInterval(() => {
    xhr2.onreadystatechange = function (params) {
        if (xhr2.readyState == 4 && xhr2.status == 200) {
            document.getElementById("checkPlayerBlack").innerHTML = xhr2.responseText;
            eval(document.getElementById("runscript2").innerHTML);
        }
    }

    var src = "ajax/ajaxPlayerBlack.php";
    xhr2.open('GET', src, true);
    xhr2.send();
    if (playerBlack != 0) {
        clearInterval(intervaCheckPlayerBlack);
    }
}, 10);

btnPlayerWhite.addEventListener('click', function(){
    xhr3.onreadystatechange = function (params) {
        if (xhr3.readyState == 4 && xhr3.status == 200) {
            document.getElementById("updateDataWhite").innerHTML = xhr3.responseText;
            // eval(document.getElementById("runscript2").innerHTML);
        }
    }

    var src = "ajax/updateDataWhite.php";
    xhr3.open('GET', src, true);
    xhr3.send();
    document.getElementById(this).style.color = "#22222";
});


btnPlayerBlack.addEventListener('click', function(){
    xhr4.onreadystatechange = function (params) {
        if (xhr4.readyState == 4 && xhr4.status == 200) {
            document.getElementById("updateDataBlack1").innerHTML = xhr4.responseText;
            // eval(document.getElementById("runscript2").innerHTML);
        }
    }
    var src = "ajax/updateDataBlack1.php";
    xhr4.open('GET', src, true);
    xhr4.send();

    xhr4a.onreadystatechange = function (params) {
        if (xhr4a.readyState == 4 && xhr4a.status == 200) {
            document.getElementById("updateDataBlack2").innerHTML = xhr4a.responseText;
            // eval(document.getElementById("runscript2").innerHTML);
        }
    }
    var src = "ajax/updateDataBlack2.php";
    xhr4a.open('GET', src, true);
    xhr4a.send();
});

var xhr1 = new XMLHttpRequest;
var xhr2 = new XMLHttpRequest;
var xhr3 = new XMLHttpRequest;
var xhr4 = new XMLHttpRequest;
var xhr5 = new XMLHttpRequest;
var xhr6 = new XMLHttpRequest;
var buttonReady = document.getElementById("buttonReady");

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

checkPlayerReady();

var gunting = document.getElementById('gunting');
var batu = document.getElementById('batu');
var kertas = document.getElementById('kertas');
var xhr1 = new XMLHttpRequest;
var xhr2 = new XMLHttpRequest;
var xhr3 = new XMLHttpRequest;
var xhr4 = new XMLHttpRequest;
var countdown = 10;

var timerSelect = setInterval(() => {
    if (countdown == 0) {
        clearInterval(timerSelect);
        //mengecek database, sudah memilih apa belom

    }
    document.getElementById('countdown').innerHTML = countdown;
    countdown--;
    console.log(countdown);
}, 1000);

batu.addEventListener('click', function (params) {
    xhr3.onreadystatechange = function (params) {
        if (xhr3.readyState == 4 && xhr3.status == 200) {
            document.getElementById('updateDataBatu').innerHTML = xhr3.responseText;
            // eval(document.getElementById('runscript').innerHTML);
        }
    }
    var src = '../php/updateBatu.php';
    xhr3.open('GET', src, true);
    xhr3.send();
})

gunting.addEventListener('click', function (params) {
    xhr1.onreadystatechange = function (params) {
        if (xhr1.readyState == 4 && xhr1.status == 200) {
            document.getElementById('updateDataGunting').innerHTML = xhr1.responseText;
            // eval(document.getElementById('runscript').innerHTML);
        }
    }
    var src = '../php/updateGunting.php';
    xhr1.open('GET', src, true);
    xhr1.send();
})

kertas.addEventListener('click', function (params) {
    xhr4.onreadystatechange = function (params) {
        if (xhr4.readyState == 4 && xhr4.status == 200) {
            document.getElementById('updateDataKertas').innerHTML = xhr4.responseText;
            // eval(document.getElementById('runscript').innerHTML);
        }
    }
    var src = '../php/updateKertas.php';
    xhr4.open('GET', src, true);
    xhr4.send();
})
// xhr2.onreadystatechange = function (params) {
//     if (xhr2.readyState == 4 && xhr2.status == 200) {
        
//     }
// }
// var src = ''
// xhr2.open();
// xhr2.send();
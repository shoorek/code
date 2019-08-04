window.onload = function () {
   /* var input = document.querySelector('#show-id'),
        pasteIP = document.querySelector('#myip'),
        send = document.querySelector('#send');

    input.addEventListener('click', function () {
        // второй параметр функция коллбэк
        ajaxGet('/?c=ajax', function (data) {
            document.querySelector('#myip').innerHTML = data;
        });
    });

    if(send) {
        send.addEventListener('click', function (e) {
            e.preventDefault();
            ajaxPost('/?c=add', 'a=b', function (data) {
                document.querySelector('#result').innerHTML = data;
            })
        });
    }*/
};

// Get запрос
function ajaxGet(url, callback) {
    var f = callback || function (data) {};
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        // пришел ответ от сервера полностью && все ок
        if(request.readyState == 4 && request.status == 200) {
            f(request.responseText);
        }
    };
    request.open('GET', url);
    request.send();
}

// Пост запрос
function ajaxPost(url, params, callback) {
    var f = callback || function (data) {};
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        // пришел ответ от сервера полностью && все ок
        if(request.readyState == 4 && request.status == 200) {
            f(request.responseText);
        }
    };
    request.open('POST', url);
    // Передавать заголовок при методе Post
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    // При методе пост параметры передаются в метод send
    request.send(params);
}

'use strict';

function calc(){
    var btns = document.querySelectorAll('.buttons button'),
        input= document.querySelector('.num'),
        res = document.querySelector('.res');

    var sum = 0,
        lastAction = '',
        flagFirst = true,
        flagInput = true;

    for(var i = 0; i<btns.length; i++) {
        btns[i].addEventListener('click', getCalc);
    }

    function getCalc(e) {
        var action = this.getAttribute('data-type'),
            num = parseFloat(input.value);
        if(!num) {
            input.focus();
            lastAction = action;
            return;
        }


        if(action == '=') {
            getAction(lastAction, num);
        } else {
            getAction(action, num);
        }

        lastAction = action;
        res.innerHTML = sum;
        input.value = '';
        input.focus();
        console.log(sum);
    }

    function getAction(action, num) {
        if(flagFirst) {
            sum = num;
            flagFirst=false;
        } else {
            if(action == '+') {
                sum += num;
            } else if(action == '-') {
                sum -= num;
            } else if(action == '/') {
                sum /= num;
            } else if(action == '*') {
                sum *= num;
            } else if(action == '=') {

            }
        }

        return sum;
    }
}

//calc();

function getLink() {
    var link = document.querySelectorAll('p a');
    for(var i = 0; i<link.length; i++)
        link[i].style.border = '1px solid red';
    console.log(link);

}
getLink();
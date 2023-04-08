let regemail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

let regpass = /[A-Z]/;
let regpass1 = /[a-z]/;
let regpass2 = /[0-9]/;
let regpass3 = /[!@#$%^&*()\-=_+~[\]{}`S'"\\|,./<>?]/;
let regpass4 = /[a-zA-Z\d\W]{6,}/;

let inp = document.querySelector('#email');
let span = document.querySelector('.span');

let inp1 = document.querySelector('#pass');
let span1 = document.querySelector('.span1');


// Проверка регуярных выражений с последующим выводом ошибок при некорректном вводе

document.querySelector('.bt').onclick = function(e){
    e.preventDefault();
    if (!validateemail(regemail,inp.value)){
        Invalid(inp, span, 'Некорректно указан Email');
    }
    else{
        Valid(inp, span, '');
    }
    if (!validatePassword(regpass,inp1.value)){
        Invalid(inp1, span1, 'Пароль должен cодержать хотя бы одну заглавную букву');
    }
    else if (!validatePassword(regpass1,inp1.value)){
        Invalid(inp1, span1, 'Пароль должен cодержать хотя бы одну букву нижнего регистра');
    }
    else if (!validatePassword(regpass2,inp1.value)){
        Invalid(inp1, span1, 'Пароль должен cодержать хотя бы одну цифру');
    }
    else if (!validatePassword(regpass3,inp1.value)){
        Invalid(inp1, span1, 'Пароль должен cодержать хотя бы один спец. символ');
    }
    else if(!validatePassword(regpass4, inp1.value)){
        Invalid(inp1, span1, 'Пароль должен иметь минимум 6 символов');
    }
    else{
        Valid(inp1, span1, '');
    }
};
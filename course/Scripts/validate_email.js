//Проверка ввода email по регулярному выражению

function validateemail(reg,inp){
    return reg.test(inp);
}

function Invalid(inp, element, message){
    inp.classList.add('is-invalid');
    element.innerHTML = message;
}

function Valid(inp, element, message){
    inp.classList.remove('is-invalid');
    inp.classList.add('is-valid');
    element.innerHTML = message;
}


//Проверка ввода пароля по регулярному выражению

function validatePassword(reg1,inp1){
    return reg1.test(inp1);
}

function Invalid(inp1, element, message){
    inp1.classList.add('is-invalid');
    element.innerHTML = message;
}

function Valid(inp1, element, message){
    inp1.classList.remove('is-invalid');
    inp1.classList.add('is-valid');
    element.innerHTML = message;
}


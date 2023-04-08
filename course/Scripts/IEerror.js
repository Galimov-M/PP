//Проверка юзерагента пользователя
function detectIE() {
    let ua = window.navigator.userAgent;
    let msie = ua.indexOf('MSIE');  
    return msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)
}
//Если браузер пользоватея Internet Exploler выводится предупреждение
const isIE = detectIE()

if ( isIE ) {
    alert("Вы используете Internet Explorer, пожалуйста смените браузер");
}
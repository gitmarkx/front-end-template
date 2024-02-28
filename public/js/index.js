const spinner = document.querySelector('#loading');
window.addEventListener('load', function () {
    spinner.classList.add('loaded');
});
setTimeout(function () {
    spinner.classList.add('loaded');
}, 1000);
    

$(function(){
    $('#hamMenu').click(function(){
        $('header').toggleClass('isActive');
    })
})
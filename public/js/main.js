
window.onload = function () {
    var quoteBackground = document.getElementById('quoteBackground');
    var imgUrl = quoteBackground.getAttribute('data-image');
//    console.log(imgUrl);
    quoteBackground.style.backgroundImage = 'url('+imgUrl+')';

    var windowHeight = window.innerHeight
            || document.documentElement.clientHeight
            || document.body.clientHeight;
    var quote = document.getElementById('quote');
    quoteTop = (windowHeight - quote.offsetHeight) / 2;
    quote.style.top = quoteTop > 5 ? quoteTop : 5;
};
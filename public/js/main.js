
window.onload = function () {
    var quoteBackground = document.getElementById('quoteBackground');
    var imgName = quoteBackground.getAttribute('data-image');
    console.log(imgName);
    quoteBackground.style.backgroundImage = 'url(images/' + imgName + ')';

    var windowHeight = window.innerHeight
            || document.documentElement.clientHeight
            || document.body.clientHeight;
    var quote = document.getElementById('quote');
    quoteTop = (windowHeight - quote.offsetHeight) / 2;
    quote.style.top = quoteTop > 5 ? quoteTop : 5;
};
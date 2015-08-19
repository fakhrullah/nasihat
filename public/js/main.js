
window.onload = function () {
    var quoteBackground = document.getElementById('quoteBackground');
    if(quoteBackground){
        var imgUrl = quoteBackground.getAttribute('data-image');
//        console.log(imgUrl);
        quoteBackground.style.backgroundImage = 'url('+imgUrl+')';
    }
    
    var quote = document.getElementById('quote');
    if(quote){
        // get window height for suitable placement of quote
        var windowHeight = window.innerHeight
                || document.documentElement.clientHeight
                || document.body.clientHeight;
        quoteTop = (windowHeight - quote.offsetHeight) / 2;
        quote.style.top = quoteTop > 5 ? quoteTop : 5;
    }
    
};
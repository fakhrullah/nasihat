<html>
    <head>
        <title>{{$title}}</title>
        <meta name=viewport content="width=device-width, initial-scale=1">
    </head>
    
    <body style="margin: 0;padding: 0;">
        <div id="quoteBackground" class="quote-background" data-image="{{$background}}"
             style="margin: 0;padding: 0;width: 100%;height: 100%;background-size: cover;background-position: center;">
            <div id="quote" class="quote" style="margin: 0 7%;padding: 3%;text-align: left; width: 80%;
                 position: absolute;color: white;line-height: 1.4em;font-family: Ubuntu;background-color: rgba(0,0,0,.3);
                 border-radius: 4px;">
                {{$quote['text']}}
                <div style="text-align: right;">[ {{$quote['src']}} ]</div>
            </div>
        </div>
        
        <script>
            window.onload = function(){
                var quoteBackground = document.getElementById('quoteBackground');
                var imgName = quoteBackground.getAttribute('data-image');
                console.log(imgName);
                quoteBackground.style.backgroundImage =  'url(images/'+imgName+')';
                
                var windowHeight = window.innerHeight
                || document.documentElement.clientHeight
                || document.body.clientHeight;
                var quote=document.getElementById('quote');
                quoteTop = (windowHeight - quote.offsetHeight)/2;
                quote.style.top = quoteTop>5?quoteTop:5;
            };
        </script>
    </body>
</html>

<html>
    <head>
        <title>{{$title}}</title>
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
        <meta name=viewport content="width=device-width, initial-scale=1">
    </head>
    
    <body style="margin: 0;padding: 0;">
        <div id="quoteBackground" class="quote-background" data-image="{{$background}}">
            <div id="quote" class="quote">
                {{$quote['text']}}
                <div class="source">[ {{$quote['src']}} ]</div>
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

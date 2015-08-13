<html>
    <head>
        <title>{{$title}}</title>
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
        <meta name=viewport content="width=device-width, initial-scale=1">
    </head>
    
    <body>
        <div id="quoteBackground" class="quote-background" data-image="{{$background}}">
            <div id="quote" class="quote">
                {{$quote['text']}}
                <div class="source">[ {{$quote['src']}} ]</div>
            </div>
        </div>
        
        <script src="{{ URL::asset('js/main.js') }}"> </script>
    </body>
</html>

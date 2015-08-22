<html>
    <head>
        <title>{{$title}}</title>
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
        <meta name=viewport content="width=device-width, initial-scale=1">
    </head>
    
    <body>
        <div id="quoteBackground" class="quote-background" data-image="{{URL::asset($background->src)}}">
            <div id="quote" class="quote">
                {{$quote->text}}
                <div class="source">
                    @if($quote->source_link)
                    <a href="{{$quote->source_link}}">
                        <span class="source">[ {{$quote->source}} ]</span>
                    </a>
                    @else
                    <span class="source">[ {{$quote->source}} ]</span>
                    @endif
                </div>
            </div>
        </div>
        
        <script src="{{ URL::asset('js/main.js') }}"> </script>
    </body>
</html>


{"filter":false,"title":"layouts.blade.php","tooltip":"/simpleboard/resources/views/layouts/layouts.blade.php","undoManager":{"mark":17,"position":17,"stack":[[{"start":{"row":0,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["<html>","    <head>","        <title>@yield('title')</title>","        <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">","        <link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">","    </head>","    <body>","        <div class=\"container\">","            @yield('content')","        </div>","","         <script src=\"{{ asset('js/app.js') }}\"></script>","    </body>","</html> ",""],"id":1}],[{"start":{"row":6,"column":10},"end":{"row":7,"column":8},"action":"insert","lines":["","        "],"id":2}],[{"start":{"row":7,"column":8},"end":{"row":8,"column":21},"action":"insert","lines":["@component('components.header')","        @endcomponent"],"id":3}],[{"start":{"row":11,"column":14},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":12,"column":0},"end":{"row":12,"column":8},"action":"insert","lines":["        "]},{"start":{"row":12,"column":8},"end":{"row":13,"column":0},"action":"insert","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":13,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":13,"column":8},"end":{"row":14,"column":21},"action":"insert","lines":["@component('components.footer')","        @endcomponent"],"id":5}],[{"start":{"row":3,"column":61},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":4,"column":0},"end":{"row":4,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":4,"column":8},"end":{"row":4,"column":78},"action":"insert","lines":["<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">"],"id":7}],[{"start":{"row":10,"column":29},"end":{"row":10,"column":30},"action":"insert","lines":[" "],"id":8}],[{"start":{"row":10,"column":30},"end":{"row":10,"column":39},"action":"insert","lines":["pt-5 pb-5"],"id":9}],[{"start":{"row":10,"column":41},"end":{"row":11,"column":12},"action":"insert","lines":["","            "],"id":10}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":42},"action":"insert","lines":["@component('components.flash')"],"id":11}],[{"start":{"row":11,"column":42},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":12,"column":0},"end":{"row":12,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":12,"column":12},"end":{"row":12,"column":25},"action":"insert","lines":["@endcomponent"],"id":13}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "],"id":14},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":5,"column":27},"end":{"row":5,"column":28},"action":"remove","lines":["t"],"id":15},{"start":{"row":5,"column":26},"end":{"row":5,"column":27},"action":"remove","lines":["e"]},{"start":{"row":5,"column":25},"end":{"row":5,"column":26},"action":"remove","lines":["s"]},{"start":{"row":5,"column":24},"end":{"row":5,"column":25},"action":"remove","lines":["s"]},{"start":{"row":5,"column":23},"end":{"row":5,"column":24},"action":"remove","lines":["a"]}],[{"start":{"row":5,"column":23},"end":{"row":5,"column":26},"action":"insert","lines":["mix"],"id":16}],[{"start":{"row":19,"column":29},"end":{"row":19,"column":30},"action":"remove","lines":["t"],"id":17},{"start":{"row":19,"column":28},"end":{"row":19,"column":29},"action":"remove","lines":["e"]},{"start":{"row":19,"column":27},"end":{"row":19,"column":28},"action":"remove","lines":["s"]},{"start":{"row":19,"column":26},"end":{"row":19,"column":27},"action":"remove","lines":["s"]},{"start":{"row":19,"column":25},"end":{"row":19,"column":26},"action":"remove","lines":["a"]}],[{"start":{"row":19,"column":25},"end":{"row":19,"column":28},"action":"insert","lines":["mix"],"id":18}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":7},"end":{"row":3,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1603429870762,"hash":"aec1158c79c649543993cd788fe058f1d6da14f4"}
{"filter":false,"title":"show.blade.php","tooltip":"/simpleboard/resources/views/posts/show.blade.php","ace":{"folds":[],"scrolltop":3,"scrollleft":0,"selection":{"start":{"row":29,"column":0},"end":{"row":29,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"d896d3d747858fcc366f8aa1cd3ed9b92ea05f6f","undoManager":{"mark":13,"position":13,"stack":[[{"start":{"row":0,"column":0},"end":{"row":5,"column":25},"action":"insert","lines":["@if (session('message'))","        {{ session('message') }}","    @endif","","    {{ $post->title }}","    {{ $post->content }} "],"id":1}],[{"start":{"row":5,"column":25},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "]},{"start":{"row":6,"column":4},"end":{"row":7,"column":0},"action":"insert","lines":["",""]},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":50},"action":"insert","lines":["<a href=\"/posts/{{ $post->id }}/edit\">Edit</a>"],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":4,"column":19},"action":"insert","lines":["@extends('layouts.layouts')","","@section('title', 'Simple Board')","","@section('content')"],"id":5}],[{"start":{"row":4,"column":19},"end":{"row":5,"column":0},"action":"remove","lines":["",""],"id":6}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "],"id":7}],[{"start":{"row":12,"column":49},"end":{"row":12,"column":50},"action":"remove","lines":[">"],"id":8},{"start":{"row":12,"column":49},"end":{"row":13,"column":0},"action":"insert","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":16},"action":"insert","lines":["@endsection "],"id":9}],[{"start":{"row":12,"column":49},"end":{"row":12,"column":50},"action":"insert","lines":[">"],"id":10}],[{"start":{"row":7,"column":10},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]},{"start":{"row":8,"column":4},"end":{"row":9,"column":0},"action":"insert","lines":["",""]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":4},"end":{"row":27,"column":29},"action":"insert","lines":["<div class=\"card\">","        <div class=\"card-body\">","            <h5 class=\"card-title\">{{ $post->title }}</h5>","            <p class=\"card-text\">{{ $post->content }}</p>","","            <div class=\"d-flex\" style=\"height: 36.4px;\">","                <button class=\"btn btn-outline-primary\">Show</button>","                <a href=\"/posts/{{ $post->id }}/edit\" class=\"btn btn-outline-primary\">Edit</a>","                <form action=\"/posts/{{ $post->id }}\" method=\"POST\" onsubmit=\"if(confirm('Delete? Are you sure?')) { return true } else {return false };\">","                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">","                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token() }}\">","                    <button type=\"submit\" class=\"btn btn-outline-danger\">Delete</button>","                </form>","            </div>","        </div>","    </div>","","    <a href=\"/posts/{{ $post->id }}/edit\">Edit</a> | ","    <a href=\"/posts\">Back</a>"],"id":12}],[{"start":{"row":29,"column":0},"end":{"row":32,"column":50},"action":"remove","lines":["    {{ $post->title }}","    {{ $post->content }} ","    ","    <a href=\"/posts/{{ $post->id }}/edit\">Edit</a>"],"id":13},{"start":{"row":28,"column":0},"end":{"row":29,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"remove","lines":["    "],"id":14}]]},"timestamp":1603433678196}
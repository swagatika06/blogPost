<html>
    <head>
        <title>search posts</title>
</head>
<body>
    <div>
        <h1>search posts</h1>
        <form action ="{{route('search')}}" method="GET">
            <label for=title>search:></label>
            <input type="text" name="title" id="title" value="{{ old('title')}}">
            <button type="submit">Search</button>
        </form>
        <hr>
        @if(isset($query))
        <h2>Search results for "{{$query}}"</h2>
        <ul>
            @foreach($posts as $post)
            <li>
                <h3>
                    {{$post->title}}
                </h3>   
            </li> 
            @endforeach
        </ul>
        @endif
</div>
</body>
</html>


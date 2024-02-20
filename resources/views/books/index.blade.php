<x-main-layout>

    <a href="{{route("books.create")}}">Add a new book!</a>

    @foreach ($books as $book)

        <div style="width:200px; height:400px; background-color:black; color:white; display:flex; flex-direction:column; align-items:center; justify-content:center">

            <h2>{{$book["title"]}}</h2>
            <address>{{$book["author"]}}</address>
            <p>{{$book["description"]}}</p>
            <p>Genre: {{$book["genre"]}}&nbsp;&nbsp;&nbsp; <span>{{$book["publishYear"]}}</span> </p>
            <p>{{$book["pages"]}} pages.</p>
            <a href="{{ route("books.show", ["book" => $book["id"]])}}">Show</a>
        
        
        </div>
        
    @endforeach

</x-main-layout>
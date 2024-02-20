<x-main-layout>

    <div style="width:100%; display:flex; flex-direction:column; align-items:center; justify-content:center">

        <h2>{{$book["title"]}}</h2>
        <address>{{$book["author"]}}</address>
        <p>{{$book["description"]}}</p>
        <p>Genre: {{$book["genre"]}}&nbsp;&nbsp;&nbsp; <span>{{$book["publishYear"]}}</span> </p>
        <p>{{$book["pages"]}} pages.</p>
        
        <div style="display: flex; flex-direction:row">

        <a href="{{route("books.edit",["book" => $book["id"]])}}">Edit</a>

            &nbsp;

        <form action="{{route("books.destroy",["book" => $book["id"]])}}">

            @csrf
            @method("DELETE")
            <button type="submit">Delete</button>
            
        </form>

        </div>
    
    </div>


</x-main-layout>
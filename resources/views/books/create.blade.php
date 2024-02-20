<x-main-layout>

    <div style="width: 100%; display:flex; justify-content:center; flex-direction:column; align-items:center">

        <form action="{{route("books.store")}}" method="POST">
        
            @csrf

                <label for="title">Title</label>
                @error("title") {{$message}} @enderror
                <input type="text" name="title" id="title">
        
                <label for="description">Description</label>
                @error("description") {{$message}} @enderror
                <input type="text" name="description" id="description">

                <label for="author">Author</label>
                @error("author") {{$message}} @enderror
                <input type="text" name="author" id="author">

                <label for="genre">Genre</label>
                @error("genre") {{$message}} @enderror
                <input type="text" name="genre" id="genre">

                <label for="publishYear">Publish year</label>
                @error("publishYear") {{$message}} @enderror
                <input type="text" name="publishYear" id="publishYear">

                <label for="pages">Number of pages</label>
                @error("pages") {{$message}} @enderror
                <input type="text" name="pages" id="pages">
        
                <br>
        
                <button type="submit">Submit book</button>
        
        
        </form>

    </div>

</x-main-layout>
<div style="display: flex; flex-direction:row; justify-content:space-around; align-items:center; background-color:black; height: 100px">
   
    <a href="/">Home</a>
    <a href="{{route("books.index")}}">Books</a>
    

    @guest
        <a href="{{ route("login")}}">Login</a>
        <a href="{{ route("register")}}">Register</a>
    @endguest

    @auth
        <form action="{{ route("logout")}}" method="POST">
            
            @csrf
            <button type="submit">Logout</button>
        
        </form>
    @endauth

</div>
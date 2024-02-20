

<x-main-layout>

    <div style="width: 100%; display:flex; justify-content:center; flex-direction:column; align-items:center">

        <h1>Login</h1>
    
        <form action="{{ route("login")}}" method="POST" style="display: flex; flex-direction: column; width: 300px; height: 300px; justify-content:center; align-items:center">
        
            @csrf
            <label for="email">Email</label>
            @error("email") {{$message}} @enderror
            <input type="text" name="email" id="email">
    
            <label for="password">Password</label>
            @error("password") {{$message}} @enderror
            <input type="password" name="password" id="password">
    
            <br>
    
            <button type="submit">Login</button>
        
        </form>
    
    </div>

    

</x-main-layout>

<x-main-layout>

    <div style="width: 100%; display:flex; justify-content:center; flex-direction:column; align-items:center">

        <h1>Register</h1>

        <form action="{{ route("register")}}" method="POST"   style="display: flex; flex-direction: column; width: 300px; height: 300px; justify-content:center; align-items:center">
        
        @csrf
        <label for="name">Username</label>
        @error("name") {{$message}} @enderror
        <input type="text" name="name" id="name">

        <label for="email">Email</label>
        @error("email") {{$message}} @enderror
        <input type="text" name="email" id="email">

        <label for="password">Password</label>
        @error("password") {{$message}} @enderror
        <input type="password" name="password" id="password">

        <label for="password_confirmation">Confirm password</label>
        @error("password_confirmation") {{$message}} @enderror
        <input type="password" name="password_confirmation" id="password_confirmation">

        <br>

        <button type="submit">Register</button>
    
    </form>

    </div>

    

</x-main-layout>
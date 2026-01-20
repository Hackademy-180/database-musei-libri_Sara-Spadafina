<x-layout>
    <h1>login</h1>
     <form method="POST" action="{{route('login')}}">
        @csrf
        
        {{-- email --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
            <div id="email" class="form-text"></div>
        </div>
        {{-- password --}}
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <p>Non hai un account? Registrati <a href="{{route("register")}}">cliccando qui.</a></p>
    </form>
</x-layout>
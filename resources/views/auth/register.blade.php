<x-layout>
    <h1>pagina di registrazione</h1>
    
    <form method="POST" action="{{route('register')}}">
        @csrf
        {{-- nome --}}
        <div class="mb-3">
            <label for="usendame" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="name">
        </div>
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
        {{-- conferma password --}}
        <div class="mb-3">
            <label for="password_confirmatio" class="form-label">Password</label>
            <input type="password" class="form-control" id="password_confirmatio" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <p>Hai già un account? Accedi <a href="{{route("login")}}">cliccando qui.</a></p>
    </form>
</x-layout>
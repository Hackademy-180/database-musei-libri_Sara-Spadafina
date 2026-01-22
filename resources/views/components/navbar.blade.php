<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("home_")}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("books_")}}">libri</a>
            </li>
             <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("books_create_")}}">aggiungi libri</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("museums_")}}">musei</a>
            </li>
             <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("museums_create_")}}">aggiungi musei</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("magazines_")}}">Giornali</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("magazines_create_")}}">Crea risora</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("posts_")}}">posts</a>
            </li>
            @auth
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("posts_create_")}}">Crea post</a>
            </li>
            @endauth
            

            {{-- utente loggato --}}
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Benvenuto {{Auth::user()->name}}
                </a>
                <ul class="dropdown-menu">
                    <form method="POST" action="{{route("logout")}}">
                    @csrf
                        <button type="submit" class="dropdown-item" >Logout</button>
                    </form>
                </ul>
            </li>
            @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Benvenuto 
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route("register")}}">Registrati</a></li>
                    <li><a class="dropdown-item" href="{{route("login")}}">Login</a></li>
                </ul>
            </li>
            @endauth
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
</nav>
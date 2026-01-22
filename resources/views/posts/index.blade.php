<x-layout>
    <h1>tutti i giornali</h1>
        <main class="container">
            <section class="row">
                @foreach ($posts as $post)
                    <article class="col-12 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                {{-- <p class="lead fw-bold">{{$magazine->name}}</p> --}}
                                <p class="lead">{{$post->title}}</p>
                                <p>post creato da: {{$post->user->name}}</p>
                                {{-- <p class="lead">{{$magazine->content}}</p> --}}
                                <a href="{{route("posts_show_", compact("post"))}}" class="btn btn-info">dettagli</a>

                                {{-- <a href="{{route("magazines_destroy_", compact("magazine"))}}" class="btn btn-danger">ELIMINA</a> --}}

                                

                            </div>
                        </div>
                    </article>    
                @endforeach
            </section>
        </main>
    </x-layout>
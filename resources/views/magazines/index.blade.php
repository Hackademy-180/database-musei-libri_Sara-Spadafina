
<x-layout>
    <h1>tutti i giornali</h1>
        <main class="container">
            <section class="row">
                @foreach ($magazines as $magazine)
                    <article class="col-12 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                {{-- <p class="lead fw-bold">{{$magazine->name}}</p> --}}
                                <p class="lead">{{$magazine->title}}</p>
                                {{-- <p class="lead">{{$magazine->content}}</p> --}}
                                <a href="{{route("magazines_show_", compact("magazine"))}}" class="btn btn-info">dettagli</a>

                                {{-- <a href="{{route("magazines_destroy_", compact("magazine"))}}" class="btn btn-danger">ELIMINA</a> --}}

                                

                            </div>
                        </div>
                    </article>    
                @endforeach
            </section>
        </main>
    </x-layout>
<x-layout>
    <h1>dettagli</h1>
        <main class="container">
            <section class="row">
                    <article class="col-12 col-md-3">
                
                                <p class="lead fw-bold">{{$post->title}}</p>
                                
                                <p class="lead">{{$post->content}}</p>
                                
                                <a href="{{route("posts_")}}" class="btn-info">torna a tutti gli articoli</a>
                                @auth
                                    @if(Auth::id()==$post->user->id)
                                        <a href="{{route("posts_edit_", compact("post"))}}" class="btn-info">modifica</a>
                                    @endif    
                                @endauth 
                                @auth
                                    @if(Auth::id()==$post->user->id)
                                        <form action="" method="POST">
                                            @csrf
                                            @method("delete")
                                            <button type="submit" class="btn btn-danger">ELIMINA</button>
                                        </form>
                                    @endif    
                                @endauth
                    </article>
            </section>
        </main>
    </x-layout>
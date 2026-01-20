<x-layout>
    <h1>dettagli</h1>
        <main class="container">
            <section class="row">
                    <article class="col-12 col-md-3">
                
                                <p class="lead fw-bold">{{$magazine->name}}</p>
                                <p class="lead">{{$magazine->title}}</p>
                                <p class="lead">{{$magazine->content}}</p>
                                
                                <a href="{{route("magazines_")}}" class="btn-info">torna a tutti gli articoli</a>
                                <a href="{{route("magazines_edit_", compact("magazine"))}}" class="btn-info">modifica ARTICOLO</a>
                                 {{-- <form action="{{route("magazines_destroy_")}}" method="POST">
                                    @csrf
                                    @method("delete")
                                     <button type="submit" class="btn btn-danger">ELIMINA</button>
                                </form> --}}
                                <form action="{{route("magazines_destroy_", compact("magazine"))}}" method="POST">
                                    @csrf
                                    @method("delete")
                                     <button type="submit" class="btn btn-danger">ELIMINA</button>
                                </form>
                    </article>
            </section>
        </main>
    </x-layout>
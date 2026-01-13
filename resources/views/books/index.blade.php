<x-layout>
        <h1>libri</h1>
        <main class="container">
            <section class="row">
                @foreach ($libri as $libro)
                    <article class="col-12 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="lead fw-bold">{{$libro->title}}</p>
                                <p class="lead">{{$libro->author}}</p>
                                <p class="lead">{{$libro->year}}</p>
                                <p class="lead">{{$libro->description}}</p>
                            </div>
                        </div>
                    </article>    
                @endforeach
            </section>
        </main>
    </x-layout>
<x-layout>
        <h1>musei</h1>
        <main class="container">
            <section class="row">
                @foreach ($musei as $museo)
                    <article class="col-12 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="lead fw-bold">{{$museo->name}}</p>
                                <p class="lead">{{$museo->country}}</p>
                                <p class="lead">{{$museo->year}}</p>
                                <p class="lead">{{$museo->description}}</p>
                            </div>
                        </div>
                    </article>    
                @endforeach
            </section>
        </main>
    </x-layout>
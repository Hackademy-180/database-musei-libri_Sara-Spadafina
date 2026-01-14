<x-layout>
        <h1>musei</h1>
        <main class="container">
            <section class="row">
                @foreach ($musei as $museo)
                    <article class="col-12 col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="{{Storage::url($museo->img)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$museo->name}}</h5>
                                    <p class="lead">{{$museo->country}}</p>
                                    <p class="lead">{{$museo->year}}</p>
                                    <p class="card-text">{{$museo->description}}</p>
                                </div>
                            </div>
                            <div class="card">
                            {{-- <div class="card-body">
                                <p class="lead fw-bold">{{$museo->name}}</p>
                                <p class="lead">{{$museo->country}}</p>
                                <p class="lead">{{$museo->year}}</p>
                                <p class="lead">{{$museo->description}}</p> --}}
                            {{-- </div>
                        </div> --}}
                    </article>    
                @endforeach
            </section>
        </main>
    </x-layout>
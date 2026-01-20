<x-layout>
    <h1>crea un riferimento alla risorsa</h1>
    {{-- name, 
        title, 
        content --}}
    <form action="{{route("magazines_submit_")}}" method="POST" class="container">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Giornale</label>
            <input type="text" id="nome" class="form-control @error('name') is-invalid @enderror" placeholder="nome giornale" name="name" value="{{old("name")}}">
            {{-- @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" id="title" class="form-control" placeholder="titolo articolo" name="title" value="{{old("title")}}">
            {{-- @error('country')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Articolo</label>
            <textarea type="text" id="content" class="form-control" placeholder="articolo" name="content" value="{{old("content")}}"></textarea>
            
        <button type="submit" class="btn btn-primary">crea</button>
    </form>
</x-layout>
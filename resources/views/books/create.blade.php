<x-layout>
    {{-- titolo, 
        autore, 
        anno di pubblicazione  
        breve descrizione della trama del libro. --}}
    <h1>Aggiungi libro</h1>
    <form action="{{route("books_submit_")}}" method="POST" class="container">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Titolo</label>
            <input type="text" id="nome" class="form-control" placeholder="titolo libro" name="title">
        </div>
        <div class="mb-3">
            <label for="autore" class="form-label">Autore</label>
            <input type="text" id="autore" class="form-control" placeholder="nome scrittore" name="author">
        </div>
        <div class="mb-3">
            <label for="anno" class="form-label">Anno</label>
            <input type="number" id="anno" class="form-control" placeholder="anno di pubblicazione" name="year">
        </div>
        <div class="mb-3">
            <label for="descrizione" class="form-label">Descrizione</label>
            <input type="text" id="descrizione" class="form-control" placeholder="breve descrizione" name="description">
        </div>
            
        <button type="submit" class="btn btn-primary">invia</button>
    </form>
</x-layout>
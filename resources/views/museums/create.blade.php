<x-layout>
    <h1>Aggiungi museo</h1>
    {{-- nome, 
        paese (country), 
        anno di apertura  
        descrizione della storia del museo. --}}
    <form action="{{route("museums_submit_")}}" method="POST" class="container">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome museo</label>
            <input type="text" id="nome" class="form-control" placeholder="nome museo" name="name">
        </div>
        <div class="mb-3">
            <label for="paese" class="form-label">Paese</label>
            <input type="text" id="paese" class="form-control" placeholder="paese" name="country">
        </div>
        <div class="mb-3">
            <label for="anno" class="form-label">Anno</label>
            <input type="number" id="anno" class="form-control" placeholder="anno di nascita del museo" name="year">
        </div>
        <div class="mb-3">
            <label for="descrizione" class="form-label">Descrizione</label>
            <input type="text" id="descrizione" class="form-control" placeholder="breve descrizione del museo" name="description">
        </div>
            
        <button type="submit" class="btn btn-primary">invia</button>
    </form>
</x-layout>
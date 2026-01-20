<x-layout>
    <h1>modifica</h1>
        
    
    {{-- name, 
        title, 
        content --}}
    <form action="{{route("magazines_update_", compact("magazine"))}}" method="POST" class="container">
        @csrf
        @method("put")
        <div class="mb-3">
            <label for="nome" class="form-label">NUOVO Giornale</label>
            <input type="text" id="nome" class="form-control" name="name" value="{{$magazine->name}}">
            
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">NUOVO Titolo</label>
            <input type="text" id="title" class="form-control" name="title" value="{{$magazine->title}}">
            
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">NUOVO Articolo</label>
            <textarea type="text" id="content" class="form-control" name="content">{{$magazine->content}}</textarea>
            
        <button type="submit" class="btn btn-primary">salva modifiche</button>
    </form>
</x-layout>

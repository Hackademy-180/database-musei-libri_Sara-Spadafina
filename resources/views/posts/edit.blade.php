<x-layout>
    <h1>modifica</h1>
        
    
    {{-- name, 
        title, 
        content --}}
    <form action="{{route("posts_update_", compact("post"))}}" method="POST" class="container">
        @csrf
        @method("put")
        
        <div class="mb-3">
            <label for="title" class="form-label">NUOVO Titolo</label>
            <input type="text" id="title" class="form-control" name="title" value="{{$post->title}}">
            
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">NUOVO content</label>
            <textarea type="text" id="content" class="form-control" name="content">{{$post->content}}</textarea>
            
        <button type="submit" class="btn btn-primary">salva modifiche</button>
    </form>
</x-layout>

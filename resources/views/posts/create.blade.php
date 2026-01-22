<x-layout>
    <h1>crea un riferimento alla risorsa</h1>
    {{-- name, 
        title, 
        content --}}
    <form action="{{route("posts_submit_")}}" method="POST" class="container">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">titolo post</label>
            <input type="text" id="title" class="form-control" name="title">
            {{-- @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
        </div>
        
        <div class="mb-3">
            <label for="content" class="form-label">content</label>
            <textarea type="text" id="content" class="form-control" name="content"></textarea>
            
        <button type="submit" class="btn btn-primary">crea</button>
    </form>
</x-layout>
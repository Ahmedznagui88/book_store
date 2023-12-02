<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2 class="text-center">Add book</h2>
        </div>
    </div>
    
    <div class="container my-5 ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('book.store')}}" method="POST" class="p-5 shadow bg-custom" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control bg-transparent" name="title" value="{{ old('title') }}" id="title">
                        @error('title')
                            <div class="fst-italic">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-3">
                        <label for="author" class="form-label">author</label>
                        <input type="text" class="form-control bg-transparent" name="author" value="{{ old('author') }}" id="author">
                        @error('author')
                            <div class="fst-italic">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-3">
                        <label for="cover" class="form-label">cover</label>
                        <input type="file" class="form-control bg-transparent" name="cover" id="cover">
                        @error('cover')
                            <div class="fst-italic">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-3">
                        <label for="plot" class="form-label">Plot</label>
                        <textarea name="plot" id="plot" cols="64" rows="5" class="form-control bg-transparent"> {{ old('plot') }} </textarea>
                        
                        @error('plot')
                            <div class="fst-italic">{{ $message }}</div>
                        @enderror
                    </div>
                   
                    <button type="submit" class="btn btn-primary rounded-0">Add book</button>
                </form>
            </div>

        </div>
    </div>
</x-layout>
<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2 class="text-center">{{ $book->title }}</h2>
        </div>
    </div>

    <div class="container my-5 ">
        <div class="row">
            <div class="col-6 col-md-4">
                <img src="{{ Storage::url($book->cover) }}" alt="{{ $book->title }}" class="img-fluid">
            </div> 
            
            <div class="col-6 col-md-4 mt-5">
                <p>{{ $book->plot }}</p>
                <div class="col-12 d-flex justify-content-between">
                    <p>{{ $book->author }}</p>
                    <p>{{ $book->created_at->format('d/m/y') }}</p>
                </div>
                <div class="col-12 d-flex justify-content-around mt-5">
                    <a href="{{ route('book.edit', $book) }}" class="btn btn-warning">&nbsp&nbspEdit&nbsp&nbsp</a>
                    <form action="{{ route('book.destroy', $book) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit " class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div> 

    </div>
</x-layout>
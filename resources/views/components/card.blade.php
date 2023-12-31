<a href="{{ route('book.show', $book) }}" class="text-decoration-none">
  <div class="card mb-3 div-bg" style="max-width: 540px; ">
    <div class="row g-0 align-items-center">
      <div class="col-md-4">
        <img src="{{ Storage::url($book->cover) }}" class="img-fluid rounded-start" alt="{{ $book->title }}">
      </div>
      <div class="col-md-8 ">
        <div class="card-body  mx-5">
          <h5 class="card-title">{{ $book->title }}</h5>
          <p class="card-text">{{ $book->author }}</p>
          <p class="card-text"><small class="text-body-secondary">{{ $book-> created_at->format('d/m/y') }}</small></p>
        </div>
      </div>
    </div>
  </div>
</a>
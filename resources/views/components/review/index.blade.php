<div class="d-flex justify-content-between">
    <h3 class="h5 font-weight-bold mb-3">{{ $title }}</h3>
    <a href="{{ route('comics.show.review.create', $comic->comic_name) }}" class="text-muted">
        <i class="fa-pen mr-1"></i>レビューを書く
    </a>
</div>

<div class="row justify-content-center">
    <div class="col-md-12 d-flex justify-content-between">
        <ul class="list-group list-group-flush w-100">
            @foreach($reviews as $review)
            <li class="list-group-item">
                {{ $review->description }}
            </li>
            <hr class="my-2">
          @endforeach
        </ul>
        
    </div>
</div>
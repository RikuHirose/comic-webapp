<!-- <div class="{{ Config::get('cssConstants.frame') }}">
    <div class="d-flex justify-content-between">
        <h3 class="h5 font-weight-bold mb-3">{{ $title }}</h3>
        <a href="" class="text-muted">もっと見る</a>
    </div>
    <div class="row">
        @foreach($comics as $comic)
            <div class="col-md-4 mb-2">
                <a href="{{ route('comics.show', $comic->comic_name) }}">
                    <img src="{{ $comic->img_url }}" alt="" class="img-fluid" style="max-height: 331px;">
                    <h5 class="pt-2">{{ $comic->comic_name }}</h5>
                </a>
            </div>
        @endforeach
    </div>
</div>
 -->
<div class="{{ Config::get('cssConstants.frame') }}">
    <div class="d-flex justify-content-between">
        <h3 class="h5 font-weight-bold mb-3">{{ $title }}</h3>
        <a href="" class="text-muted">もっと見る</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 d-flex justify-content-between">
            @foreach($comics as $comic)
                <div class="col-md-4 mb-2">
                    <a href="{{ route('comics.show', $comic->comic_name) }}">
                        <img src="{{ $comic->img_url }}" alt="" class="img-fluid" style="max-height: 250px;">
                        <h5 class="pt-2">{{ $comic->comic_name }}</h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
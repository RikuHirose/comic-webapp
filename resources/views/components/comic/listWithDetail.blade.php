<!-- <div class="{{ Config::get('cssConstants.frame') }}">
    @foreach($comics as $comic)
        <a class="text-reset align-self-center" href="/comics/11143">
            <div class="row py-1">
                <div class="col-3 text-center">
                    <img class="mx-2" height="100" src="{{ $comic->img_url }}">
                </div>
                <div class="col align-self-center">
                    <h5 class="font-weight-bold mt-0 mb-1">{{ $comic->comic_name }}</h5>
                    <div class="text-muted authorname-list">{{ $comic->writer_name }}</div>
                    <p class="rating-list">
                        <span class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                        <span class="text-muted ml-2">4.24</span>
                    </p>
                    <span class="badge badge-outline-secondary mr-1">LINEマンガ</span>
                </div>
            </div>
        </a>
        <hr class="my-2">
    @endforeach
</div> -->



<div class="{{ Config::get('cssConstants.frame') }}">
    @foreach($comics as $comic)
        <div class="row mb-3">
            <div class="col-md-3">
                <a href="{{ route('comics.show', $comic->comic_name) }}">
                    <img class="mx-2" height="100" src="{{ $comic->img_url }}" style="max-height: 200px;">
                </a>
            </div>
            <div class="col-md-9 mt-2 mb-2">
                <div class="">
                    <h2 class="">
                        <a href="{{ route('comics.show', $comic->comic_name) }}" class="c-res-index-card__ttl--link">{{ $comic->comic_name }}</a>
                    </h2>
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            @include('components.comic.star', ['comic' => $comic])
                            <span class="m-tag">
                            LINEマンガ
                            </span>
                        </div>
                    </div>
                    <div class="mt-2 mb-2">
                        {{ $comic->writer_name }}
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-2">
    @endforeach
</div>
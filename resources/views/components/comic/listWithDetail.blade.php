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
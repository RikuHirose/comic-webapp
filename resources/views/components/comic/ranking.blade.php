<div class="d-flex justify-content-between">
  <h3 class="h5 font-weight-bold mb-3">{{ $title }}</h3>
  <a class="text-muted" href="/comics">もっと見る＞</a>
</div>

<ul class="list-untitled pl-0 mb-0">
  @foreach($comics as $key => $comic)
    <a class="" href="{{ route('comics.show', $comic->comic_name) }}">
      <div class="row py-1">
        <div class="col-3 text-center">
          <img class="mx-2" height="100" src="{{ $comic->img_url }}">
        </div>
        <div class="col align-self-center">
          <div class="row">
            <div class="col-1 align-self-center">
              @if ($isRanking)
                <h5 class="m-0 p-0 ranking-text">
                  {{ $key + 1 }}
                </h5>
              @endif
            </div>
            <div class="col">
              <h5 class="font-weight-bold mt-0 mb-1">{{ $comic->comic_name }}</h5>
              <div class="text-muted mt-0 mb-1">
                {{ $comic->writer_name }}
              </div>
              @include('components.comic.star', ['comic' => $comic])
              <span class="m-tag">
                @if(!is_null($comic->applications))
                  {{ $comic->applications[0]->name }}
                @endif
              </span>
            </div>
          </div>
        </div>
      </div>
    </a>
    <hr class="my-2">
  @endforeach
</ul>

<div class="d-flex justify-content-between">
  <h3 class="h5 font-weight-bold mb-3">{{ $title }}</h3>
  <a class="text-muted" href="/comics">もっと見る＞</a>
</div>

<ul class="list-untitled pl-0 mb-0">
  @foreach($applications as $key => $application)
    <a class="" href="">
      <div class="row py-1">
        <div class="col-3 text-center">
          <img class="mx-2" height="100" src="{{ $application->image_url }}">
        </div>
        <div class="col align-self-center">
          <div class="row">
            <div class="col-7">
              <h5 class="mt-0 mb-1">{{ $application->name }}</h5>
            </div>
            <div class="col text-center align-self-center">
              <a class="btn btn-primary btn-sm">今すぐ読む</a></div>
          </div>
        </div>
      </div>
    </a>
    <hr class="my-2">
  @endforeach
</ul>

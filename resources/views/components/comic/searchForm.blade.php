<div class="row justify-content-center">
  <div class="col-md-12 justify-content-between">
    <form action="{{ route('comics.index') }}" accept-charset="UTF-8" method="get">
      <div class="row">
        <div class="form-group col-sm-9">
          @if(is_null($query))
            <input placeholder="マンガ名や作家名で検索" name="query" type="text" value="" class="form-control">
          @else
            <input placeholder="マンガ名や作家名で検索" name="query" type="text" value="{{ $query }}" class="form-control">
          @endif
        </div>
        <div class="form-group col-sm-3 text-center">
            <input type="submit" value="検索" data-disable-with="送信中..." class="btn btn-success btn-go">
        </div>
      </div>
    </form>
  </div>
</div>
@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('comics.show.review.create', $comic) }}
<div class="{{ Config::get('classConstants.frame') }}">
  <div class="d-flex justify-content-between">
      <h3 class="h5 font-weight-bold mb-3">
        <i class="fa-pen mr-1"></i>{{ $comic->comic_name }}のレビューを書く
      </h3>
  </div>

  <div class="row justify-content-center">
      <div class="col-md-12 d-flex justify-content-between">
          <form action="{{ route('comics.show.review.store', $comic->comic_name) }}" method="POST" class="w-100">
            @csrf
            <div class="form-group">
              <label>
                レビュー
              </label>
              <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">レビューを公開する</button>
          </form>
      </div>
  </div>
</div>

@endsection
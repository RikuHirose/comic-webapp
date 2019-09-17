@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('writer', $comics) }}

        <form class="comic_search" id="company-search-form" action="/comics" accept-charset="UTF-8" method="get">
            <input name="utf8" type="hidden" value="✓">
                <div class="form-group row py-3">
                    <div class="col-9 pr-0">
                        <input class="form-control form-control-sm" id="name_cont-text-input" placeholder="作品名や作家名で検索" type="text" name="search">
                    </div>
                    <div class="col px-0 text-center">
                    <input type="submit" value="検索" class="btn btn-primary btn-sm" data-disable-with="検索">
                    </div>
                </div>
        </form>
            <div class="card text-center search_result">
                <div class="card-header">
                    <b>Comics</b>
                </div>
                    @isset($request->search)
                        <p>{{ $search_result }}</p>
                    @endisset
            </div>
                @foreach($comics as $comic)
                <a href="{{ route('comics.show', $comic->comic_name) }}">
                <div class="card">
                    <div class="card-header">Comic
                    </div>
                        <div class="card-body">
                            <img src="{{ $comic->img_url }}" alt="" class="img-fluid">


                            <h5>Comic:{{ $comic->comic_name }}</h5>
                            <h5>Author:{{ $comic->writer_name }}</h5>


                        </div>
                </div>
                </a>
                @endforeach


@endsection
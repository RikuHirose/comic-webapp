@extends('layouts.app')

@section('content')
    {{ Breadcrumbs::render('index') }}
    <div class="container-fluid">
        <h1 class="h5 font-weight-bold">漫画一覧</h1>
        <small class="text-muted">ss</small>
    </div>
    <!-- comic_search -->
    <div class="{{ Config::get('cssConstants.frame') }}">
        <form class="comic_search" id="company-search-form" action="{{ route('comics.index') }}" accept-charset="UTF-8" method="get">
            <input name="utf8" type="hidden" value="✓">
                <div class="form-group row">
                    <div class="col-9 pr-0">
                        <input class="form-control form-control-sm" id="name_cont-text-input" placeholder="作品名や作家名で検索" type="text" name="search">
                    </div>
                    <div class="col px-0 text-center">
                    <input type="submit" value="検索" class="btn btn-primary btn-sm" data-disable-with="検索">
                    </div>
                </div>
        </form>
    </div>
    @isset($request->search)
        <div class="card text-center search_result">
                <p>{{ $search_result }}</p>
        </div>
    @endisset
    <!-- comic_list -->
    @include('components.comic.listWithDetail', ['comics' => $comics])

    {{ $comics->links('vendor.pagination.default') }}

@endsection
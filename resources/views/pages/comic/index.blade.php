@extends('layouts.app')

@section('content')
    {{ Breadcrumbs::render('index') }}
    <div class="container-fluid">
        @if(is_null($query))
            <h1 class="h5 font-weight-bold">漫画一覧</h1>
        @else
            <h1 class="h5 font-weight-bold">"{{ $query }}" の検索結果一覧</h1>
        @endif
    </div>
    <!-- comic_search -->
    <div class="{{ Config::get('classConstants.frame') }}">
        @include('components.comic.searchForm', ['query' => $query])
    </div>
    <!-- comic_list -->
    @include('components.comic.listWithDetail', ['comics' => $comics])

    {{ $comics->links('vendor.pagination.default') }}

@endsection
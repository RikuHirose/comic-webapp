@extends('layouts.app')

@section('content')
    {{ Breadcrumbs::render('index') }}
    <div class="container-fluid">
        <h1 class="h5 font-weight-bold">漫画一覧</h1>
        <small class="text-muted">ss</small>
    </div>
    <!-- comic_search -->
    <div class="{{ Config::get('classConstants.frame') }}">
        @include('components.comic.searchForm', [])
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
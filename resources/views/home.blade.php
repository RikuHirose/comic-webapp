@extends('layouts.app')

@section('content')
    <!-- comic_search -->
    <div class="{{ Config::get('classConstants.frame') }}">
        @include('components.comic.searchForm', [])
    </div>
    <!-- comic_list -->
    <div class="{{ Config::get('classConstants.frame') }}">
        @include('components.comic.list', ['title' => '無料', 'comics' => $comics])
    </div>
    <!-- top5Comics -->
    <div class="{{ Config::get('classConstants.frame') }}">
        @include('components.comic.ranking', ['isRanking' => true, 'title' => '人気ランキング', 'comics' => $top5Comics])
    </div>
    <!-- bottomComics -->
    <div class="{{ Config::get('classConstants.frame') }}">
        @include('components.comic.list', ['title' => 'あれもこれも！待てば無料！', 'comics' => $bottomComics])
    </div>
@endsection

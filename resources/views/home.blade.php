@extends('layouts.app')

@section('content')
    <div class="{{ Config::get('classConstants.frame') }}">
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

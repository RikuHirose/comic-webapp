@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('comics.show', $comic) }}

<div class="container-fluid my-2">
  <h1 class="h5 font-weight-bold">{{ $comic->comic_name }}を無料で読めるアプリ情報</h1>
</div>

<div class="{{ Config::get('classConstants.frame') }}">
  <div class="media">
    <img class="align-self-center mr-3" alt="{{ $comic->comic_name }}" src="{{ $comic->img_url }}" style="height: 200px;">
    <div class="media-body h-100 d-block">
      <p class="py-1 my-0">
        <a class="text-reset" href="/authors/4319">{{ $comic->writer_name }}</a>
      </p>
      <h2 class="h5 py-1 mb-0 font-weight-bold">{{ $comic->comic_name }}</h2>
      <p class="py-1">
        @include('components.comic.star', ['comic' => $comic])
        <span class="m-tag">
        LINEマンガ
        </span>
      </p>
      <p class="text-right mb-0 align-bottom justify-content-end">
        <a class="btn btn-light" href="">
          <i class="fa fa-amazon"></i> Amazonで買う
        </a>
      </p>
    </div>
  </div>
</div>

<div class="container-fluid">
  @foreach($comic->applications as $application)
        <div class="media">
        <img class="mr-3 rounded" width="50" src="">
        <div class="media-body align-self-center">
        <div class="row">
        <div class="col-7">
        <h2 class="mt-0 mb-1">{{ $application->name }}</h2>
        <span class="text-muted"></span>
        </div>
        <div class="col text-center align-self-center">
        <a class="btn btn-primary btn-sm" href="{{ $application->url }}">今すぐ読む</a>
        </div>
        </div>
        </div>
        </div>

  @endforeach


</div>

<div class="{{ Config::get('classConstants.frame') }}">
  <table class="table text-sm" >
    <tbody>
      <tr>
        <th class="py-2 table-secondary">
        作品名
        </th>
        <td class="py-2">
        {{ $comic->comic_name }}
        </td>
        </tr>
        <tr>
        <th class="py-2 table-secondary">
        作家名
        </th>
        <td class="py-2">
        <a class="text-reset" href="/authors/4618">
        {{ $comic->writer_name }}
        </a>
        </td>
      </tr>
      <tr>
        <th class="py-2 table-secondary">
        出版社
        </th>
        <td class="py-2">
        {{ $comic->publisher }}
        </td>
      </tr>
      <tr>
        <th class="py-2 table-secondary">掲載雑誌</th>
        <td class="py-2">{{ $comic->publication_magazine }} </td>
      </tr>
      <tr>
        <th class="py-2 table-secondary">巻数</th>
        <td class="py-2"><span> {{ $comic->publish_number }} </span><span class="badge badge-success ml-2"> {{ $comic->publish_status }} </span></td></tr><tr><th class="py-2 table-secondary">掲載期間</th><td class="py-2"> {{ $comic->duration }} </td>
      </tr>
    </tbody>
  </table>
 </div>

<!-- witersComics -->
<div class="{{ Config::get('classConstants.frame') }}">
    @include('components.comic.ranking', ['isRanking' => false, 'title' => $comic->writer_name.'の他の作品', 'comics' => $witersComics])
</div>

<!-- top5Comics -->
<div class="{{ Config::get('classConstants.frame') }}">
    @include('components.comic.ranking', ['isRanking' => true, 'title' => '人気ランキング', 'comics' => $top5Comics])
</div>
<!-- bottomComics -->
<div class="{{ Config::get('classConstants.frame') }}">
    @include('components.comic.list', ['title' => 'あれもこれも！待てば無料！', 'comics' => $bottomComics])
    <a href="{{ route('comics.index') }}" class="m-btn">もっと見る</a>
</div>
@endsection
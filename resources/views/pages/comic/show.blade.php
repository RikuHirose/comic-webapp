@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('show', $comic) }}

<div class="container-fluid">
  <img src="{{ $comic->img_url }}" alt="" class="img-fluid">
  <h3>{{ $comic->writer_name }} </h3>
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



<div class="container-fluid">
  <table class="table table-bordered text-sm">
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


@endsection
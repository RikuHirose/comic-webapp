<?php

// top
Breadcrumbs::for('top_page', function ($trail) {
  $trail->push('TOP', route('top_page'));
});

// top > マンガ一覧
Breadcrumbs::for('index', function ($trail) {
  $trail->parent('top_page');
  $trail->push('マンガ一覧', route('comics.index'));
});

// top > writer_name
Breadcrumbs::for('writer', function ($trail, $comic) {
  $trail->parent('top_page');
  $trail->push($comic->writer_name, route('comics.index', ['query' => $comic->writer_name]));
});

// top > writer_name > comic_name
Breadcrumbs::for('comics.show', function ($trail, $comic) {
  $trail->parent('writer', $comic);
  $trail->push($comic->comic_name, route('comics.show',$comic->comic_name));
});

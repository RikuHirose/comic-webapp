<?php

namespace App\Repositories\Eloquent;
use App\Repositories\comicRepositoryInterface;
use App\Models\Comic;

class ComicRepository implements ComicRepositoryInterface
{
    protected $comic;

    /**
    * @param object $comic
    */
    public function __construct(Comic $comic)
    {
        $this->comic = $comic;
    }

    public function getBlankModel()
    {
        return new comic();
    }

    public function create($input)
    {
      $comic = $this->comic->create($input);

      return $comic;
    }

    public function all()
    {
      $comics = $this->comic->all();

      return $comics;
    }

    public function searchComics($input)
    {
        // $comic_name = $input['comic_name'];
        // $writer_name = $input['writer_name'];


        $comics = $this->comic
        ->where('comic_name', 'like', "%{$input}%")
        ->orWhere('writer_name', 'like', "%{$input}%")
        ->get();

        return $comics;
    }

    public function findcomicId($comic_name)
    {

        $comic_id = $this->comic
        ->where('comic_name', $comic_name)
        ->orWhere('writer_name', $writer_name)
        // ->orWhere('name', 'like', "%{$comic_name}%")
        ->pluck('id')
        ->find();

        return $comic_id;
    }

    public function getPopularcomics(){
        $comics = $this->comic
        ->take(10)
        ->get();

        return $comics;
    }

}
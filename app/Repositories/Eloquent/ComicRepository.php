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

    public function findByName($name)
    {
        return $this->comic
        ->where('comic_name', $name)
        ->first();
    }

    public function searchComics($input)
    {
        $comics = $this->comic
        ->where('comic_name', 'like', "%{$input}%")
        ->orWhere('writer_name', 'like', "%{$input}%")
        ->paginate();

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

    public function firstComic($comic_name){
        $comic = $this->comic
        ->where('comic_name', $comic_name)
        ->first();

        return $comic;
    }

    public function getBywriterName($writer_name)
    {
        $comic = $this->comic
        ->where('writer_name', $writer_name)
        ->get();

        return $comic;
    }

    public function getBywriterNameAndWhereNotInComicName($comic_name, $writer_name)
    {
        $comic = $this->comic
        ->where('writer_name', $writer_name)
        ->whereNotIn('comic_name', [$comic_name])
        ->get();

        return $comic;
    }

    public function getPopularcomics()
    {
        $comics = $this->comic
        ->take(10)
        ->get();

        return $comics;
    }

    public function getComicsByRanking()
    {
        $comics = $this->comic
        ->take(5)
        ->get();

        return $comics;
    }

    public function getComicsByRandom()
    {
        $comics = $this->comic
        ->where('img_url', '!=', "")->inRandomOrder()->take(30)->get();

        return $comics;
    }
}
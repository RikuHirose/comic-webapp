<?php

namespace App\Repositories\Eloquent;
use App\Repositories\Eloquent\AbstractRepository;
use App\Repositories\comicRepositoryInterface;
use App\Models\Comic;

class ComicRepository extends AbstractRepository implements ComicRepositoryInterface
{
    protected $model;

    /**
    * @param object $model
    */
    public function __construct(Comic $model)
    {
        $this->model = $model;
    }

    public function getBlankModel()
    {
        return new Comic();
    }

    // public function create($input)
    // {
    //   $model = $this->model->create($input);

    //   return $model;
    // }

    // public function all()
    // {
    //   $models = $this->model->all();

    //   return $models;
    // }

    public function findByName($name)
    {
        return $this->model
        ->where('comic_name', $name)
        ->first();
    }

    public function searchComics($input)
    {
        $models = $this->model
        ->where('comic_name', 'like', "%{$input}%")
        ->orWhere('writer_name', 'like', "%{$input}%")
        ->paginate();

        return $models;
    }

    public function findcomicId($model_name)
    {

        $model_id = $this->model
        ->where('comic_name', $model_name)
        ->orWhere('writer_name', $writer_name)
        // ->orWhere('name', 'like', "%{$model_name}%")
        ->pluck('id')
        ->find();

        return $model_id;
    }

    public function firstComic($model_name){
        $model = $this->model
        ->where('comic_name', $model_name)
        ->first();

        return $model;
    }

    public function getBywriterName($writer_name)
    {
        $model = $this->model
        ->where('writer_name', $writer_name)
        ->get();

        return $model;
    }

    public function getBywriterNameAndWhereNotInComicName($comic_name, $writer_name)
    {
        $model = $this->model
        ->where('writer_name', $writer_name)
        ->whereNotIn('comic_name', [$comic_name])
        ->get();

        return $model;
    }

    public function getPopularcomics()
    {
        $models = $this->model
        ->take(10)
        ->get();

        return $models;
    }

    public function getComicsByRanking()
    {
        $models = $this->model
        ->take(5)
        ->get();

        return $models;
    }

    public function getComicsByRandom()
    {
        $models = $this->model
        ->where('img_url', '!=', "")->inRandomOrder()->take(30)->get();

        return $models;
    }
}
<?php

namespace App\Repositories\Eloquent;
use App\Repositories\ComicApplicationRepositoryInterface;
use App\Models\ComicApplication;

class ComicApplicationRepository implements ComicApplicationRepositoryInterface
{
    protected $comicApplication;

    /**
    * @param object $comicApplication
    */
    public function __construct(ComicApplication $comicApplication)
    {
        $this->comicApplication = $comicApplication;
    }

    public function getBlankModel()
    {
        return new ComicApplication();
    }

    public function create($input)
    {
      $comicApplication = $this->comicApplication->create($input);

      return $comicApplication;
    }

    public function all()
    {
      $comicApplications = $this->comicApplication->all();

      return $comicApplications;
    }



}
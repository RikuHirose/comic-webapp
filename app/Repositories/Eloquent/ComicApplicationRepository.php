<?php
namespace App\Repositories\Eloquent;

use App\Models\ComicApplication;
use App\Repositories\ComicApplicationRepositoryInterface;

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

    public function firstOrCreate($input)
    {
        $comicApplication = $this->comicApplication->firstOrCreate($input);

        return $comicApplication;
    }

    public function all()
    {
        $comicApplications = $this->comicApplication->all();

        return $comicApplications;
    }
}

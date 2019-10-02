<?php
namespace App\Services\Production;

use App\Repositories\ComicRepositoryInterface;
use App\Services\ComicServiceInterface;

class ComicService implements ComicServiceInterface
{
    protected $comicRepository;

    public function __construct(
      ComicRepositoryInterface $comicRepository
  ) {
        $this->comicRepository = $comicRepository;
    }

    public function getComicsBySearch($input)
    {
        if (is_null($input)) {
            return $this->comicRepository->getBlankModel()->paginate();
        }

        return $this->comicRepository->searchComics($input);
    }
}

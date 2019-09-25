<?php
namespace App\Services\Production;

use App\Models\Comic;
use App\Services\ComicServiceInterface;
use App\Repositories\ComicRepositoryInterface;

class ComicService implements ComicServiceInterface
{
  protected $comicRepository;

  public function __construct(
        ComicRepositoryInterface $comicRepository
  )
  {
      $this->comicRepository = $comicRepository;
  }

  public function getComicsBySearch($input)
  {
    if (is_null($input)) {
      return $this->comicRepository->getBlankModel()->paginate();
    }

    return $this->comicRepository->searchComics($input);;
   }
}
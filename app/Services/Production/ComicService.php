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

  public function getComicsBySearch($input){
     if($input){
       $allcomics = $this->comicRepository->searchComics($input);
     } else {
       $allcomics = $this->comicRepository->getBlankModel()->paginate();
     }
     return $allcomics;
   }
}
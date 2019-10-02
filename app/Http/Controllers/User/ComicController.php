<?php
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ComicServiceInterface;
use App\Repositories\ComicRepositoryInterface;
use App\Repositories\reviewRepositoryInterface;

class ComicController extends Controller
{
    protected $comicService;
    protected $comicRepository;
    protected $reviewRepository;

    public function __construct(
        ComicServiceInterface $comicService,
        ComicRepositoryInterface $comicRepository,
        ReviewRepositoryInterface $reviewRepository
    ) {
        $this->comicService      = $comicService;
        $this->comicRepository   = $comicRepository;
        $this->reviewRepository  = $reviewRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        \Log::info('Display a listing of the comic');
        $query  = $request->get('query');
        $comics = $this->comicService->getComicsBySearch($query);

        return view(
            'pages.comic.index',
            [
                'comics'  => $comics,
                'query'   => is_null($query) ? null : $query,
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($comic_name)
    {
        $comic        = $this->comicRepository->firstComic($comic_name);
        $witersComics = $this->comicRepository->getBywriterNameAndWhereNotInComicName($comic_name, $comic->writer_name);
        $top5Comics   = $this->comicRepository->getComicsByRanking();
        $bottomComics = $this->comicRepository->getComicsByRandom();

        $reviews      = $this->reviewRepository->getByComicId($comic->id);

        $comic->load('applications');
        $witersComics->load('applications');
        $top5Comics->load('applications');
        $bottomComics->load('applications');

        return view(
            'pages.comic.show',
            [
                'comic'        => $comic,
                'witersComics' => $witersComics,
                'top5Comics'   => $top5Comics,
                'bottomComics' => $bottomComics,
                'reviews'      => $reviews,
            ]
        );
    }
}

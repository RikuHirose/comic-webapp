<?php
namespace App\Http\Controllers;

use App\Repositories\ComicRepositoryInterface;

use App\Services\ComicServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $comicRepository;
    protected $comicService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ComicRepositoryInterface $comicRepository,
        ComicServiceInterface $comicService
    ) {
        $this->comicRepository   = $comicRepository;
        $this->comicService      = $comicService;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $comics       = $this->comicRepository->getBlankModel()->take(6)->get();
        $top5Comics   = $this->comicRepository->getComicsByRanking();
        $bottomComics = $this->comicRepository->getComicsByRandom();

        $comics->load('applications');
        $top5Comics->load('applications');
        $bottomComics->load('applications');

        \SeoHelper::setIndexSeo();

        return view('home', [
            'comics'       => $comics,
            'top5Comics'   => $top5Comics,
            'bottomComics' => $bottomComics,
        ]);
    }
}

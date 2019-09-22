<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComicRequest;

use App\Repositories\ComicRepositoryInterface;
use App\Models\Comic;
use App\Services\ComicServiceInterface;



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
    )
    {
        $this->comicRepository   = $comicRepository;
        $this->comicService    = $comicService;

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
        $bottomComics = $this->comicRepository->getBlankModel()->take(30)->get();

        return view('home',[
            'comics'       => $comics,
            'top5Comics'   => $top5Comics,
            'bottomComics' => $bottomComics,
        ]);
    }
}

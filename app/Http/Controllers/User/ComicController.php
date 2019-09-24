<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ComicRepositoryInterface;
use App\Models\Comic;
use App\Services\ComicServiceInterface;


class ComicController extends Controller
{
    protected $comicRepository;
    protected $comicService;

    public function __construct(
        ComicRepositoryInterface $comicRepository,
        ComicServiceInterface $comicService

    )
    {
        $this->comicRepository   = $comicRepository;
        $this->comicService    = $comicService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        \Log::info('Display a listing of the comic');

        $comics = $this->comicService->getComicsBySearch($request->search);

        return view('pages.comic.index',
            [
                'comics' => $comics
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($comic_name)
    {
        $comic        = $this->comicRepository->firstComic($comic_name);
        $witersComics = $this->comicRepository->getBywriterNameAndWhereNotInComicName($comic_name, $comic->writer_name);
        $top5Comics   = $this->comicRepository->getComicsByRanking();
        $bottomComics = $this->comicRepository->getBlankModel()->take(30)->get();

        $comic->load('applications');
        $witersComics->load('applications');
        $top5Comics->load('applications');
        $bottomComics->load('applications');

        return view('pages.comic.show',
            [
                'comic'        => $comic,
                'witersComics' => $witersComics,
                'top5Comics'   => $top5Comics,
                'bottomComics' => $bottomComics,
            ]
        );
    }

    public function writer($writer_name)
    {

        $comics = $this->comicRepository->getBywriterName($writer_name);
        return view('pages.comic.writer_show',
            [
                'comics' => $comics
            ]
        );
    }

}

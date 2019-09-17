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


        /**
        ** TODO: comicRepository作ってpages.comic.indexにViewを作ってください
        **/
        $allcomics = $this->comicService->getComicsBySearch($request->search);

        return view('pages.comic.index',
            [
                'allcomics' => $allcomics
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
        /**
        ** TODO: comicRepository作ってpages.comic.indexにViewを作ってください
        **/

        $comic = $this->comicRepository->firstComic($comic_name);
        return view('pages.comic.show',
            [
                'comic' => $comic
            ]
        );
    }

    public function writer($writer_name)
    {

        $comics = $this->comicRepository->getComicBywritername($writer_name);
        return view('pages.comic.writer_show',
            [
                'comics' => $comics
            ]
        );
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}

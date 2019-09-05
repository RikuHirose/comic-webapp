<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComicRequest;

use App\Repositories\ComicRepositoryInterface;
use App\Models\Comic;

class HomeController extends Controller
{

    protected $comicRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ComicRepositoryInterface $comicRepository
    )
    {
        $this->comicRepository   = $comicRepository;
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
        /**
        ** TODO: url=> / のtop page
        **/

        if($request->search){
            $input = $request->search;
            $allcomics = $this->comicRepository->searchComics($input);
        }else{
            $allcomics = $this->comicRepository->all();
        }

        return view('home',[
            'allcomics' => $allcomics,
        ]);
    }
}

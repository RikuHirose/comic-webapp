<?php
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ComicServiceInterface;
use App\Repositories\ComicRepositoryInterface;
use App\Repositories\reviewRepositoryInterface;

class ReviewController extends Controller
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

    public function create($comic_name)
    {
        $comic = $this->comicRepository->firstComic($comic_name);

        return view(
            'pages.comic.review.create',
            [
                'comic'  => $comic,
            ]
        );
    }

    public function store($comic_name, Request $request)
    {
        $comic = $this->comicRepository->firstComic($comic_name);
        $input  = $request->only($this->reviewRepository->getBlankModel()->getFillable());

        if (!isset($input['comic_id'])) {
            array_set($input, 'comic_id', $comic['id']);
        }

        $this->reviewRepository->create($input);

        return redirect()->route('comics.show', $comic->comic_name)->with('result', '成功です！');
    }
}

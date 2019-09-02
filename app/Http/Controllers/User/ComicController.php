<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ComicRepositoryInterface;
use App\Models\Comic;

class ComicController extends Controller
{
    protected $ComicRepository;

    public function __construct(
        ComicRepositoryInterface $comicRepository
    )
    {
        $this->comicRepository = $comicRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Log::info('Display a listing of the companies');


        /**
        ** TODO: comicRepository作ってpages.comic.indexにViewを作ってください
        **/

        $companies = $this->companyRepository->getBlankModel()->all();
        $companies->load('review', 'like', 'companyIndustry.industry');

        return view('pages.company.index',
            [
                'companies' => $companies
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        /**
        ** TODO: comicRepository作ってpages.comic.indexにViewを作ってください
        **/

        $company->load('review', 'like', 'companyIndustry.industry');

        \Log::info('Display a the specified company for company: '.$company['id']);

        return view('pages.company.show',
            [
                'company' => $company
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

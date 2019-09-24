<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

use App\Repositories\ComicRepositoryInterface;
use App\Repositories\ApplicationRepositoryInterface;
use App\Repositories\ComicApplicationRepositoryInterface;

class CommicApplications extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(
        ComicRepositoryInterface             $comicRepository,
        ApplicationRepositoryInterface       $applicationRepository,
        ComicApplicationRepositoryInterface  $comicApplicationRepository
    )
    {
        parent::__construct();
        $this->comicRepository             = $comicRepository;
        $this->applicationRepository       = $applicationRepository;
        $this->comicApplicationRepository  = $comicApplicationRepository;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        self::sortCsv();

    }


    public function sortCsv()
    {
        // comic_applications.csvからcomic_id, application_idのcsvを作る
        // comic、applicationをdbに入れてsql検索した方が楽?
        $comics       = $this->comicRepository->all();
        $applications = $this->applicationRepository->all();
        // $comic_applications = $this->comicApplicationRepository->all();

        dd($comics);
    }
}

<?php
namespace App\Console\Commands;

use App\Repositories\ApplicationRepositoryInterface;

use App\Repositories\ComicApplicationRepositoryInterface;
use App\Repositories\ComicRepositoryInterface;
use Illuminate\Console\Command;

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
        ComicRepositoryInterface $comicRepository,
        ApplicationRepositoryInterface $applicationRepository,
        ComicApplicationRepositoryInterface $comicApplicationRepository
    ) {
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

        $csvComicApplications = \CsvHelper::csvToArray('/Users/rikuparkour1996/www/comic-webapp/database/seeds/Data/comicApplications.csv');

        foreach ($csvComicApplications as $key => $csvComicApplication) {
            $comicName       = $csvComicApplication[0];
            $applicationName = $csvComicApplication[1];

            $comic       = $this->comicRepository->findByName($comicName);
            $application = $this->applicationRepository->findByName($applicationName);

            if (!is_null($comic) && !is_null($application)) {
                echo $comic->comic_name.'と'.$application->name.'のcommicApplicationを作成中...';

                $this->comicApplicationRepository->firstOrCreate([
                    'comic_id'       => $comic->id,
                    'application_id' => $application->id,
                ]);
            }
        }
    }
}

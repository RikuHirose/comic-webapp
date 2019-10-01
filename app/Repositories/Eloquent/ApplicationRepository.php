<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\AbstractRepository;
use App\Repositories\ApplicationRepositoryInterface;
use App\Models\Application;

class ApplicationRepository extends AbstractRepository implements ApplicationRepositoryInterface
{
    protected $application;

    /**
    * @param object $application
    */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    public function getBlankModel()
    {
        return new Application();
    }

    // public function create($input)
    // {
    //   $application = $this->application->create($input);

    //   return $application;
    // }

    // public function firstOrCreate($input)
    // {
    //   $application = $this->application->firstOrCreate($input);

    //   return $application;
    // }

    // public function all()
    // {
    //   $applications = $this->application->all();

    //   return $applications;
    // }

    public function findByName($name)
    {
        return $this->application
        ->where('name', $name)
        ->first();
    }

}
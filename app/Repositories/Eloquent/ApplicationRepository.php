<?php

namespace App\Repositories\Eloquent;
use App\Repositories\ApplicationRepositoryInterface;
use App\Models\Application;

class ApplicationRepository implements ApplicationRepositoryInterface
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

    public function create($input)
    {
      $application = $this->application->create($input);

      return $application;
    }

    public function all()
    {
      $applications = $this->application->all();

      return $applications;
    }



}
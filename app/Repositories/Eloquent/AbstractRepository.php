<?php

namespace App\Repositories\Eloquent;

use Exception;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\AbstractRepositoryInterface;

abstract class AbstractRepository implements AbstractRepositoryInterface
{
    /** @var Model */
    protected $model;

    abstract public function getBlankModel();

    public function __construct()
    {
    }

    public function create($input)
    {
      return $this->model->create($input);
    }

    public function firstOrCreate($input)
    {
      return $this->model->firstOrCreate($input);
    }

    public function all()
    {
      return $this->model->all();
    }

    public function findById($id)
    {
      return $this->model->where('id', $id)->first();
    }
}

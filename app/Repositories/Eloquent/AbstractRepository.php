<?php
namespace App\Repositories\Eloquent;

use App\Repositories\AbstractRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

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

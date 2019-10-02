<?php
namespace App\Repositories\Eloquent;

use App\Models\Review;
use App\Repositories\ReviewRepositoryInterface;

class ReviewRepository extends AbstractRepository implements ReviewRepositoryInterface
{
    protected $model;

    /**
     * @param object $review
     */
    public function __construct(Review $review)
    {
        $this->model = $review;
    }

    public function getBlankModel()
    {
        return new Review();
    }

    public function findByName($name)
    {
        return $this->model
        ->where('name', $name)
        ->first();
    }

    public function getByComicId($comicId)
    {
        return $this->model
        ->where('comic_id', $comicId)
        ->get();
    }
}

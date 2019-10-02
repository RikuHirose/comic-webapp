<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'id',
        'comic_id',
        'description',
    ];

    // Relations
    public function comic()
    {
        $this->belongsTo(\App\Models\Comic::class, 'comic_id', 'id');
    }
}

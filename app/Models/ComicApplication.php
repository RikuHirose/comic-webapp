<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComicApplication extends Model
{
    protected $table = 'comic_applications';

    protected $fillable = [
        'id',
        'comic_id',
        'application_id',
    ];

    // Relations
    public function comic()
    {
        $this->belongsTo(\App\Models\Comic::class, 'comic_id', 'id');
    }

    public function application()
    {
        $this->belongsTo(\App\Models\Application::class, 'application_id', 'id');
    }
}

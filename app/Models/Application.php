<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{

    protected $table = 'applications';

    protected $fillable = [
        'id',
        'name',
        'url',
    ];


  // Relations
  public function applicationComics()
  {
    $this->belongsToMany(\App\Models\Comic::class, 'comic_applications', 'application_id', 'comic_id');
  }

}

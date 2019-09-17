<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{

    protected $table = 'comics';

    protected $fillable = [
        'id',
        'comic_name',
        'writer_name',
        'publisher',
        'publication_magazine',
        'publish_number',
        'publish_status',
        'duration',
        'amazon_url',
    ];


  // Relations
  public function review(){
    return $this->hasMany(\App\Models\Review::class, 'comic_id', 'id');
  }

  public function applications()
  {
    return $this->belongsToMany(\App\Models\Application::class, 'comic_applications', 'comic_id', 'application_id');
  }

}

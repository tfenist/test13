<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topick extends Model
{
    use HasFactory;
    protected $connection ='mysql';
    public $table = 'topic';
    protected $fillable = [
        'theme',

    ];
    public function allnews() {
        return $this->belongsToMany('App\Models\News', 'news-topick', 'news_id', 'topick_id');
    }
}

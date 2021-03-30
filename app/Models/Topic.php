<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $connection ='mysql';
    public $table = 'topics';
    protected $fillable = [
        'title',
    ];

    public function allnews() {
        return $this->hasMany('App\Models\News', 'author_id');
    }
}

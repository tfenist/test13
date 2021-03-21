<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $connection ='mysql';
    public $table = 'authors';
    protected $fillable = [
        'name',
    ];

    public function allnews() {
        return $this->hasMany('App\Models\News', 'author_id');
    }
}

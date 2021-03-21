<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $connection ='mysql';
    public $table = 'news';
    protected $fillable = [
        'subject',
        'message',
        'name',
        'email',
        'author_id',
    ];

    public function author() {
        return $this->belongsTo('App\Models\Author','author_id');
    }
}

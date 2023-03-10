<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'Posts';

    protected $fillable = [
        'name',
        'date',
        'description',
        'category_id'

    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}



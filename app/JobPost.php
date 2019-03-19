<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $fillable = [
        'title', 'city', 'link', 'type', 'skills', 'degree', 'company', 'industry', 'salary', 'rating'
    ];

}

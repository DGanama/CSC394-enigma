<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model
{
    protected $fillable = [
        'name', 'email', 'link', 'city', 'skills'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

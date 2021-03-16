<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'companyName', 'companyCity',
    ];

    use HasFactory;

    public function employees()
    {
       return $this->hasMany('App\Models','companyName');
    }
}

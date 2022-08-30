<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
     protected $fillable = [
        'name',
    ];


    public function books(){
        $this->hasMany('App\Models\Books','category_id','category_id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primaryKey='id';
    protected $fillable=[
        'category_id',
        'name',
        'author',
        'desc',
        'price'
    ];
    protected $with=['category'];

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id','category_id');
    }
}
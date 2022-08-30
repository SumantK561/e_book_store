<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

     protected $table = 'carts';
     protected $primaryKey = 'cart_id';
     protected $fillable = [
        'user_id',
        'book_id',
        'quantity',
     ];

     public function user(){
        return $this->belongsTo('App\Models\User','user_id','user_id');
     }
     
     public function books(){
        return $this->belongsTo('App\Models\Books','book_id','book_id');
}
}
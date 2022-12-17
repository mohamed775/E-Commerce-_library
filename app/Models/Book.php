<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Book extends Model
{
    use HasFactory;

    protected $table='book';
    protected $fillable=['name','image','cat_id','price','author','deleted_at','created_at','updated_at'];
    protected $hidden=['created_at','updated_at','deleted_at'];


    public function Category()
    {
        return $this->belongsTo(Category::class ,'category_id');
    }

    public function Cart()
    {
        return $this->belongsTo(Cart::class);
    }

    // public function User()
    // {
    //     return $this->belongsTo(User::class ,'user_id');
    // }
}

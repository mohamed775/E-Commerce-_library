<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentTransations extends Model
{
    use HasFactory;
    protected $table="users_transation";
    protected $fillable=['user_id','transation_id'];
}

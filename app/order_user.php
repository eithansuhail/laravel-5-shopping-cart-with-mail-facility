<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_user extends Model
{
    protected $fillable = ['user_id', 'address', 'payment_id'];
}

<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
class Cartproduct extends Model
{
    

    // public $incrementing = false;

    protected $fillable = ['product_id', 'user_id', 'quantity'];

   
}
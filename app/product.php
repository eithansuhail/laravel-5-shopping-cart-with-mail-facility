<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=['modelno','productname','price','discount','mrp','inthebox','dsize','resolution','os','processortype','internalstorage','expandablestorage','primarycamera','primarycamerafeature','secondarycamera','secondarycamerafeature','yearoflaunch','imageurl'];
}

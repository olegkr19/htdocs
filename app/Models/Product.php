<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }
}

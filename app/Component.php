<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = [
        'name', 'product_id'
    ];

    public function product(){
        return $this -> belongsTo('App\Product');
    }
}

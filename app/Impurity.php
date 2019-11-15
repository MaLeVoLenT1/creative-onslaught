<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impurity extends Model
{
    protected $fillable = [
        'name', 'PPM', 'product_id'
    ];

    public function product(){
        return $this -> belongsTo('App\Product');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concentration extends Model
{
    protected $fillable = [
        'name', 'PPM', 'product_id'
    ];

    public function product(){
        return $this -> belongsTo('App\Product');
    }
}

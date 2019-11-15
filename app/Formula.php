<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    protected $fillable = [
        'formula', 'product_id'
    ];

    public function product(){
        return $this -> belongsTo('App\Product');
    }
}

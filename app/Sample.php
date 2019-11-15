<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $fillable = [
        'sample', 'product_id'
    ];

    public function product(){
        return $this -> belongsTo('App\Product');
    }
}

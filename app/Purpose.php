<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purpose extends Model
{
    protected $fillable = [
        'content', 'product_id'
    ];

    public function product(){
        return $this -> belongsTo('App\Product');
    }
}

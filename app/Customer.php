<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'company', 'phone_number', 'order_number',
        'quote_number', 'industry'
    ];

    public function products(){
        return $this -> hasMany('App\Product');
    }
}

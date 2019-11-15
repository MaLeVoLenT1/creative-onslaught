<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'customer_id', 'name', 'serial_number', 'PN', 'series_number', 'power',
        'volts', 'frequency', 'approvals', 'flow_system_number', 'design_status', 'column_id', 'detector'
    ];

    public function customer(){return $this -> belongsTo('App\Customer');}
    public function samples(){return $this -> hasMany('App\Sample');}
    public function concentrations(){return $this -> hasMany('App\Concentration');}
    public function formulas(){ return $this -> hasMany('App\Formula');}
    public function components(){ return $this -> hasMany('App\Component');}
    public function methods(){ return $this -> hasMany('App\Method');}
    public function purposes() { return $this -> hasMany('App\Purpose');}
    public function impurities() { return $this -> hasMany('App\Impurities');}


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $primaryKey='id';

    public function order()
    {
        return $this->hasMany('App\Order');
    } 
}

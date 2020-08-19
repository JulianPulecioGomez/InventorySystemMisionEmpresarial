<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'provider_id', 'description', 'name', 'stick', 'price'
    ];
    public function provider(){
    	return $this->belongsTo('App\Employee');
    }
}

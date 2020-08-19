<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'legal_entity', 'email'
    ];
    public function employees(){
    	return $this->hasMany('App\Employee');
    }

}

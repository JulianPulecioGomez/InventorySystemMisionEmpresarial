<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'client_id', 'email'
    ];
    public function client(){
    	return $this->belongsTo('App\Client');
    }
    public function Section(){
    	return $this->belongsToMany('App\Section');
    }
}

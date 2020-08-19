<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeesSections extends Model
{
    protected $table = 'employees_sections';

    public function client(){
    	return $this->belongsToMany('App\Client');
    }
}

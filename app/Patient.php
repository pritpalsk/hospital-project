<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $attributes = [];
    public $fillable = [
    	'fname',
    	'lname',
    	'dob',
    	'ssn',
    	'gender',
    	'phonenum',
    	'address',
    	'deptID'
    ];
    public $hidden = [];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $fillable = [
    	'fname',
    	'lname',
    	'dob',
    	'startdate',
    	'gender',
    	'ssn'
    ];
}

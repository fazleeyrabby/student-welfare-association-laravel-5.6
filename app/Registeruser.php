<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registeruser extends Model
{
    protected $table="registeruser";
    protected $primaryKey="user_id";
    protected $fillable=[
    	'username',
    	'email',
    	'password',
    	'repass',
    	'country',
    	'city',
    	'contact',
    	'address',
    	'img'
    ];
}

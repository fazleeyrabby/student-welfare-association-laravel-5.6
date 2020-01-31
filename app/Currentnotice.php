<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currentnotice extends Model
{
    
    protected $table="currentnotice";
    protected $primaryKey="curntnotc_id";
    protected $fillable=[
    	'name',
    	'publication_status'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    
    protected $table="about";
    protected $primaryKey="about_id";
    protected $fillable=[
    	'text_type',
    	'description',
    	'publication_status'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constitution extends Model
{
    protected $table="constitution";
    protected $primaryKey="constuon_id";
    protected $fillable=[
    	'constitution_heading',
    	'constitutiont_description',
    	'filetoupload',
    	'publication_status'
    ];
}

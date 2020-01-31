<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table="gallery";
    protected $primaryKey="gallery_id";
    protected $fillable=[
    	'pro_name',
    	'description',
    	'img',
    	'img_year',
    	'publication_status'
    ];
}

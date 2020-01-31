<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table="notice";
    protected $primaryKey="notice_id";
    protected $fillable=[
    	'title',
    	'description',
    	'author_name',
    	'filetoupload',
    	'publication_status'
    ];
}

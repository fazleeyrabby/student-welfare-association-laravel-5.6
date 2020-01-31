<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userjournal extends Model
{
    protected $table="userjournal";
    protected $primaryKey="journal_id";
    protected $fillable=[
    	'journal_title',
        'user_id',
    	'category_id',
    	'journal_description',
    	'user_author_name',
        'blog_img',
        'filetoupload',
    	'tran_num',
    	'status'
    ];
}

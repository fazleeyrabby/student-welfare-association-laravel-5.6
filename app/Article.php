<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table="article";
    protected $primaryKey="article_id";
    protected $fillable=[
    	'article_title',
    	'category_id',
    	'article_description',
    	'author_name',
        'blog_img',
    	'filetoupload',
    	'publication_status'
    ];
}

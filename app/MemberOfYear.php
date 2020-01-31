<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberOfYear extends Model
{
    protected $table="memberofyear";
    protected $primaryKey="moy_id";
    protected $fillable=[
    	'mbr_year',
    	'description',
    	'publication_status'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table="member";
    protected $primaryKey="member_id";
    protected $fillable=[
    	'name',
    	'designation',
        'mbr_typ',
        'an_mbr_typ',
    	'address',
    	'email',
    	'contact',
    	'profession',
    	'edu_bcgnd',
    	'last_edu_insttd',
        'blood_group',
    	'moy_id',
    	'description',
    	'profile_pic',
    	'publication_status'
    ];
}

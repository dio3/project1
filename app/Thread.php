<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guarded = [];

    // protected $fillable = [
    // 	'subject',
    // 	'thread',
    // 	'type',
    	
    // ];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}

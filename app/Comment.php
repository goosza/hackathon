<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['comment','user_id','created_at'];
    
     public function user()
    {
        return $this->belongsTo('App\User');
    }
}

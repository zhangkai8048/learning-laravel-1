<?php

namespace App;

use App\Base;

class Comment extends Base
{
    //
    public function post(){
        return $this->belongsTo('App\Post');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function photos(){
        $this ->morphMany('App\Photo','imageable');
    }
}

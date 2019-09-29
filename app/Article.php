<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function scopeNewest($query){
        return $query->where('created_at', '>', now()->subDays(30));
    }
}

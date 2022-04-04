<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    /**
     * 
     * A fam can be owned by one or many user (farmers in our case)
     * 
     */
    public function user() {
        return $this->belongsToMany('App\Models\User');
    }
}
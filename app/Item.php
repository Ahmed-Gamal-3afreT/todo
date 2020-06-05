<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function lists()
    {
        return $this->belongsTo('App\Category');
    }
    
    protected $fillable = [
        'name',
        'desc',
        'category_id',
    ];
}

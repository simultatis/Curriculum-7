<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];
    
    public function getPaginateBylimit(int $limit_count = 10)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
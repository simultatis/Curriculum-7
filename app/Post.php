<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 dev_basis0-2
    public function getPaginateBylimit(int $limit_count = 10)
{
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}

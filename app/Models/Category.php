<?php

namespace App\Models;

use App\Models\Album;
use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use AdminBuilder;

    protected $table = 'categories';

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}

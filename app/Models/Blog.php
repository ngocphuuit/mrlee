<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use AdminBuilder;

    protected $table = 'blogs';

     protected $dates = ['created_at', 'updated_at'];
}

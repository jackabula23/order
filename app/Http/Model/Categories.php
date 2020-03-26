<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'cate_id';
    protected $fillable = ['cate_name'];
    public $timestamps = false;
}


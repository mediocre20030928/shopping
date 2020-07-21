<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model
{
    protected $table = "cate";
    protected $primaryKey = "cate_id";
    public $timestamps = false;
}

<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CategoryModel extends Model
{
    protected $table='p_category';
    protected $primaryKey='cat_id';
    protected $guarded=[];
    public $timestamps=false;
}

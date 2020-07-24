<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CategoryModel extends Model
{

    public $table = 'tdb_goods_types';
    public $primaryKey = 'type_id';
    protected $guarded=[];
    public $timestamps=false;

}

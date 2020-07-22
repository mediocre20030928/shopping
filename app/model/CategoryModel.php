<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CategoryModel extends Model
{
<<<<<<< HEAD
    public $table = 'p_category';
    public $primaryKey = 'cat_id';
=======
    protected $table='p_category';
    protected $primaryKey='cat_id';
    protected $guarded=[];
    public $timestamps=false;
>>>>>>> brand
}

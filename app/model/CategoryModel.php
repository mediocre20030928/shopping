<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CategoryModel extends Model
{
    public $table = 'p_category';
    public $primaryKey = 'cat_id';
}

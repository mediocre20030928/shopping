<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\model\CategoryModel;
use Illuminate\Http\Request;

use DB;
class CategoryController extends Controller
{

    public function category(){
       $cate_data=CategoryModel::where('parent_id',0)->get();
       $cate_all_data= $this->fl($cate_data->toArray());
//        echo "<pre>";print_r($cate_all_data);echo "</pre>";die;
       return view('shop.category',['cate_all_data'=>$cate_all_data]);
    }
    public function fl($data,$pid=0,$le=0){
//创建一个静态数组保存数据
        static $array=array();
//循环出所有的有关数据保存进数组
        foreach ($data as $v){
//当第一循环是pid==0 因为上面已经设置pid==0
            if($v['parent_id']==$pid){
//这里是为了区分级别
                $v['le']=$le;
//将有关数据保存如数据
                $array[]=$v;
//为了将有关数据保存数据，这里使用递归
                self::fl($data,$v['cat_id'],$le+1);

            }
        }
//将最后的内容输出返回
        return $array;
    }





}

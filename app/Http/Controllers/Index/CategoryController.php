<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\model\CategoryModel;
use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
    public function category()
    {
       //调用模型方法
        $a=$this->r();
      //将数据返回视图
        //return view('wxj/r',['list'=>$a]);
        return view('shop.category',['list'=>$a]);


    }




    public function r(){
        //echo 1234567;
        //输出数据库的所有内容
        $sql = CategoryModel::get();
//         dd($sql);
        //$sql=DB::table('p_category')->get();
        //调用fl方法
        $result=$this->fl($sql,$pid=0);
        var_dump($result);die;
        return $result;
    }
   //创建方法 $data参数是数据库所有数据 $pid参数是数据库pid $le参数是为了区分显示级别的
    public function fl($data,$pid=0,$le=0){
        //创建一个静态数组保存数据
        static $array=array();
        //循环出所有的有关数据保存进数组
        foreach ($data as $v){
             //当第一循环是pid==0 因为上面已经设置pid==0
            if($v->parent_id==$pid){
             //这里是为了区分级别
                $v->le=$le;
              //将有关数据保存如数据
                $array[]=$v;
              //为了将有关数据保存数据，这里使用递归
                $this->fl($data,$v->parent_id,$le+1);
            }
        }
//将最后的内容输出返回
        return $array;
    }
}

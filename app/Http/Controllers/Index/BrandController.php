<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\model\BrandModel;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * 分类添加视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function brand_add()
    {
        $brand = BrandModel::all();

        return view('shop.brand_add');
    }

    public function brand_addDo(Request $request){
        $cate_name = $request->post('cate_name');

        $data = [
            'cate_name'=>$cate_name,
            'print_id'=>$request->input('print_id'),
            'create_at'=>time()
        ];
        $res = BrandModel::insert($data);
        var_dump($res);



    }


    public function brand_list()
    {
        return view('shop.brand');
    }
}

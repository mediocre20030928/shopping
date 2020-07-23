<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\GoodsModel;
class ShopController extends Controller
{
    public function index()
    {
        $menu = GoodsModel::orderby('goods_id', 'DESC')->limit(4);//商品
        $is_new=GoodsModel::where('is_new','1')->orderBy('goods_id','DESC')->limit(4)->get();//最新
        $best = GoodsModel::where('is_best', '2')->orderby('goods_id', 'DESC')->limit(6)->get();//热卖
        return view('shop.index',['menu'=>$menu,'is_new'=>$is_new,'best'=>$best]);
    }
    public function test1(){

        return ('shop.ceater');
    }


}

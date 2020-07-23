<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\GoodsModel;
class ShopController extends Controller
{

    public function index(){
        $res=GoodsModel::orderby( 'goods_id' , 'DESC' )->limit(4)->get();//商品
        $pwa=GoodsModel::where('is_new','1')->orderBy('goods_id','DESC')->limit(4)->get();//最新
        $get=GoodsModeL::where( 'is_best', '2' )->orderBy( 'goods_id', 'DESC' )->limit(4)->get();//热卖
        return view('shop.index' ,['res' =>$res,'pwa'=>$pwa, 'get'=>$get]);
    }
    public function test1(){

        return view('shop.ceater');

    }


}

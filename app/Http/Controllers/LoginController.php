<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\send;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function reg(){
        return view('login.reg');
    }
    public function login(){
        return view('login.login');
    }
    public function getpass(){
        return view('login.getpass');
    }
    public function overpass(){
        return view('login.overpass');
    }

    public function sendcode(Request $request){
        $user_phone = $request->user_phone;
        $send = new send();
        $res = $send->send($user_phone);
        $res = json_decode($res,true);
        if($res['return_code'] == '00000'){
            echo json_encode(['errno'=>'00000','msg'=>'短信发送成功']);
        }else{
            echo json_encode(['errno'=>'00001','msg'=>'短信发送失败']);
            exit;
        }
    }

    public function do_reg(Request $request){
        $user_phone = $request -> user_phone;
        $user_pwd = $request -> user_pwd;
        $code = $request -> code;
        $truecode = Session::get('code');
        if($code != $truecode){
            echo json_encode(['errno'=>'00001','msg'=>'验证码错误!!!']);
            exit;
        }
        $once = DB::table('user')->where('user_phone',$user_phone)->first();
        if(empty($once)){
            $arr = array(
                'user_phone'=>$user_phone,
                'user_pwd'=>md5($user_pwd),
                'create_at'=>time(),
            );
            $res = DB::table('user')->insert($arr);
            if($res){
                echo json_encode(['errno'=>'00000','msg'=>'注册成功']);
            }else{
                echo json_encode(['errno'=>'00001','msg'=>'注册失败']);
                exit;
            }
        }else{
            echo json_encode(['errno'=>'00002','msg'=>'该手机号已经存在!']);
            exit;
        }
    }
}

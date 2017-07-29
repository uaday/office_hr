<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
//        $data = [
//            '0' => [
//                'name' => 'Welcome',
//                'city' => 'Dhaka',
//                'country' => 'Bangladesh',
//            ]
//        ];
////        $datas = [
////            '0' => [
////                'name' => 'Welcome',
////                'city' => 'Dhaka',
////                'country' => 'Bangladesh',
////            ]
////        ];
////        $sdata['data']=$datas;
//        return view('demo',compact('data'));
////        return view('demo',['data'=>$data]);
//        //return view('demo',$sdata);
    }
    public function login()
    {
        return view('admin.login.view_login');
    }
}

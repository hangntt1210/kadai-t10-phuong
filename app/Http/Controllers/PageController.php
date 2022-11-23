<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use Session;
use App\Models\User;

class PageController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required'
            ],
            [
                'email.required'=>'Email không được để trống',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Password không được để trống',
            ]
        );
        
        $credentials = array('email'=>$req->email, 'password'=>$req->password);
        if(Auth::attempt($credentials)){
            return view('giaodienadmin');//em sửa lại chỗ này thành trang giao diện admin là được nhé 
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Email hoặc Password không đúng']);
        }
    }
}

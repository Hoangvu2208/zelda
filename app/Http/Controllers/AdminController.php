<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        if(Auth::guard('admin')->check()){
            Session::flash('success','Login Success');
            $user = User::count('id');
            
            $category = Category::count('id');
            $product = Product::count('id');
            $order = Order::count('id');
            return view('admin.home',[
                'title'=>'Dashboard',
                'category'=>$category,
                'user'=> $user,
                'product'=>$product,
                'order'=>$order
            ]);
        }else{
            Session::flash('error','Please login :( ');
            return redirect()->route('admin.login');
        }
    }
    public function login(Request $request){
        $credentials=$request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            Session::flash('success','Login Successfully!');
           return redirect()->route('admin.dashboard');
        } else {
            Session::flash('error','Login failled, please check your email or password!');
            return redirect()->back();
        }
    }
    public function dashboard(){
        if(Auth::guard('admin')->check()){
            Session::flash('success','Login Success');
            $user = User::count('id');
            
            $category = Category::count('id');
            $product = Product::count('id');
            $order = Order::count('id');
            $post = Post::count('id');
            
            
            return view('admin.home',[
                'title'=>'Dashboard',
                'category'=>$category,
                'user'=> $user,
                'product'=>$product,
                'order'=>$order
            ]);
        }else{
            Session::flash('error','Please login !');
            return redirect()->route('admin.login');
        }
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    
}

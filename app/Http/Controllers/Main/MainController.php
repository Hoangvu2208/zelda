<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Mail;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index(){
        return view('main.login', [
            'title'=> 'Zelda-CbC-Member'
        ]);
    }
    public function store(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
         $request->session()->regenerate();
         $product_new = Product::orderbyDesc('updated_at')->limit(6)->get();
            $user = Auth::user();
            $category = Category::all();
            $product = Product::all();
            return redirect()->route('index');
        }        

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function register(){
        return view('main.register',[
            'title'=> 'Register Page'
        ]);
    }
    public function signup(Request $request){
       $pass = $request->input('password');
       $confirm=  $request->input('confirm-password');

        if($pass == $confirm){
            $user = new User([
                'name'=>(string) $request->input('name'),
                'email'=>(string) $request->input('email'),
                
                'password'=>(string) bcrypt($pass),
    
            ]);
            $user->save();
            Session::flash('success','Sign up success!');
           return redirect()->route('user.login');
        }else {
            Session::flash('error','Something was wrong, please try again later');
            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
    
    
    
        return redirect()->route('index');
    }

    //Shop here
    public function showShop(){
        
        $category = Category::all();
        $product = Product::orderbyDesc('updated_at')->paginate(8);
        return view('main.shop',[
            'title'=>'Our Shop',
            
            'category'=>$category,
            'product'=>$product
        ]);
    }
    public function showDetail(Product $product){
        return view('main.detail',[
            'title'=>$product->name,
            'product'=>$product
        ]);

    }

    // contact  form 
    public function contact(){
        return view('main.contact',[
            'title'=> 'Contact'
        ]);
    }
    public function mail(Request $request){
        $mail = new Mail([
            'name'=> (string) $request->input('name'),
            'email'=> (string) $request->input('email'),
            'subject'=> (string) $request->input('subject'),
            'message'=> (string) $request->input('message'),
        ]);
        $mail->save();
        Session::flash('success','Message was sent successfully!');
        return redirect()->route('index');
        
    }
    public function mailList(){
        $mail = Mail::all();
        return view('admin.mail.list',[
            'title' => 'Contact Mails List',
            'mail' => $mail,
            'index'=>1
        ]);
    }
    public function myPage(){
        $user = Auth::user();
        
        //dd($user);
        if (isset($user)){
            $order = Order::where('user_id',$user->id)->get();
            return view('main.mypage',[
                'title'=>'Hello '.$user->name,
                'user'=>$user,
                'order'=>$order,
                'index'=>1
            ]);

        }
        Session::flash('error','Please login :(');
        return redirect()->route('index');
    }
}

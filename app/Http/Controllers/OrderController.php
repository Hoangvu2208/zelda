<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
        
    public function orderList(){
        $cartItems = CartFacade::getContent();
        $user =Auth::user();
        if (isset($user)){
            return view('main.checkout',[
                'title'=>'check_out_page',
                'user'=>$user,
                'cartItems'=> $cartItems
            ]);
        }else if(empty($cartItems)){
            Session::flash('error','Cart empty :(');
            return redirect()->back();
        }else{
            Session::flash('error','Please login :(');
            return redirect()->back();
        }

    }
    public function checkOut(Request $request){
        
        
        $user = Auth::user();
      
        
            $order = new Order([
                'user_id'=> $user->id,
                'username'=>(string) $request->input('name'),
               
                'content' =>(string) $request->input('content'),
                'total'=>$request->input('total'),
                'address' =>(string) $request->input('address'),
                'phone_numbers'=> (string) $request->input('phone_numbers'),
                'payment'=>(string) $request->input('payment'),
                'status'=>'Waiting'
                
            ]);
            $order->save();

            CartFacade::clear();
        Session::flash('success','Ordered!!');
        return redirect()->route('index');
       
    }
    public function index(){
        $orders = Order::where('status','Waiting')->get();
        
        
        return view('admin.order.list',[
            'title'=>'Orders List',
            'orders'=>$orders,
            
            'index'=>1
        ]);
    }
    public function show(Order $order){
        $id = $order->user_id;
        $user = User::where('id',$id)->get();
        //  dd($user);
        return view('admin.order.detail',[
            'title' => 'Detail Of Order',
            'order'=> $order,
            'user'=> $user
        ]);

    }
    public function updateOrder(Request $request,Order $order){
      
          $order->status = $request->input('status');
            $order->save();
       
        Session::flash('success','Status of Order has changed!');
        return redirect()->route('admin.order.list');
    }
    public function checked(){
        $orders = Order::where('status','Success')->get();
        
        
        return view('admin.order.checked',[
            'title'=>'Checked orders',
            'orders'=>$orders,
            
            'index'=>1
        ]);
    }
}

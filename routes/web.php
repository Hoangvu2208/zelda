<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = Auth::user();
    $product_new = Product::orderBy('updated_at')->limit(6)->get();
    $categories= Category::all();
    $product = Product::all(); 
    if (isset($user)){
        return redirect()->route('shop.home');
    }

     
   // dd($product_new);
    return view('index',[
        'title'=>'Zelda-Modern Design',
        'category'=>$categories,
        'product'=>$product,
        'product_new'=>$product_new
        
    ]);
    
})->name('index');

/*
# validate by email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
# send email for users
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
#Resent emails
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

*/
# admin 
    Route::prefix('admin')->group(function(){
        Route::get('/',[AdminController::class,'index']);

        Route::get('/login',function(){
            return view('admin.login',[
                'title'=>'Admin-Login'
            ]);
        });
        Route::post('/login',[AdminController::class,'login'])->name('admin.login');
        Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');
       
        #category
        Route::prefix('menus')->group(function(){
        Route::get('add',[MenuController::class,'create'])->name('category.create');
        Route::post('add',[MenuController::class,'store']);
        Route::get('list',[MenuController::class,'index'])->name('category.list');
        Route::DELETE('destroy',[MenuController::class,'destroy']);
        Route::get('edit/{category}',[MenuController::class,'show'])->name('category.update');
        Route::post('edit/{category}',[MenuController::class,'update']);
        
    });
    #product
        Route::prefix('products')->group(function(){
        Route::get('list',[ProductController::class,'index'])->name('product.list');
        Route::get('add',[ProductController::class,'create']);
        Route::post('add',[ProductController::class,'store']);
        Route::DELETE('destroy',[ProductController::class,'destroy']);
        Route::get('edit/{product}',[ProductController::class,'show'])->name('product.update');
        Route::post('edit/{product}',[ProductController::class,'update']);
        
    });
    #post
        Route::prefix('posts')->group(function(){
        Route::get('list',[PostController::class,'index'])->name('post.list');
        Route::get('add',[PostController::class,'create']);
        Route::post('add',[PostController::class,'store']);
        Route::DELETE('destroy',[PostController::class,'destroy']);
        Route::get('edit/{post}',[PostController::class,'show'])->name('post.update');
        Route::post('edit/{post}',[PostController::class,'update']);
    });
    #user
        Route::prefix('users')->group(function(){
        Route::get('list',[UserController::class,'index']);
    });
    #Order 
        Route::prefix('orders')->group(function(){
            Route::get('list',[OrderController::class,'index'])->name('admin.order.list');
            Route::get('edit/{order}',[OrderController::class,'show'])->name('admin.order.update');
            Route::get('checked',[OrderController::class,'checked'])->name('admin.order.checked');
            Route::post('detail/{order}',[OrderController::class,'updateOrder'])->name('order.change');
            
    });
    Route::prefix('mails')->group(function(){
            Route::get('list',[MainController::class,'mailList'])->name('mail');
    });
 
});
Route::prefix('shop')->group(function(){
    #Redirect and filter
    Route::get('category/{category}',[SearchController::class,'searchCat']);
    Route::post('results',[SearchController::class,'search'])->name('search');
    Route::get('pricedown',function(){
        $category = Category::all();
        $product = Product::orderbyDesc('price')->paginate(8);
        return view('main.shop',[
            'title'=>'Latest Products',
            'category'=>$category,
            'product'=>$product
            
        ]);
    })->name('pricedown');
    Route::get('priceup',function(){
        $category = Category::all();
        $product = Product::orderBy('price')->paginate(8);
        return view('main.shop',[
            'title'=>'Latest Products',
            'category'=>$category,
            'product'=>$product
            
        ]);
    })->name('priceup');

    #User Login
    Route::get('login',[MainController::class,'index'])->name('user.login');
    Route::post('login',[MainController::class,'store']);
    Route::get('register',[MainController::class,'register'])->name('user.register');
    Route::post('register',[MainController::class,'signup']) ;  
    Route::get('logout',[MainController::class,'logout'])->name('user.logout');
    #Shop
    Route::get('home',function(){
        $product_new = Product::orderBy('updated_at')->limit(6)->get();
        $user = Auth::user();
        $category = Category::all();
        $product = Product::all();
        return view('main.home',[
            'user'=>$user,
            'title'=>'Welcome to Zelda of CBC',
            'category'=>$category,
            'product'=>$product,
            'product_new'=>$product_new
        ]);
    })->name('shop.home');
    Route::get('/',[MainController::class,'showShop'])->name('shop');
    
    # Cart
    Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
    #Order
    Route::get('check_order',[OrderController::class,'orderList'])->name('order.list');
    Route::post('check_order',[OrderController::class,'checkOut'])->name('checkout');
    #Detail
    Route::get('detail/{product}',[MainController::class,'showDetail'])->name('product.detail');
    #Author
    Route::get('author_profiles',function(){
        return view ('main.author',[
            'title'=> 'About author'
        ]);
    })->name('author');
    #contact
    Route::get('contact',[MainController::class,'contact'])->name('contact');
    Route::post('contact',[MainController::class,'mail'])->name('contact_send');
    #About
    Route::get('about',function(){
        return view('main.about',[
            'title'=>'About Us'
        ]);
    })->name('about');
    Route::get('mypage/',[MainController::class,'myPage'])->name('mypage');
    
});

   

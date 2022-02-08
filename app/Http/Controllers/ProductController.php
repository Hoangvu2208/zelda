<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index(){
      
        return view('admin.product.list',[
            'title'=>'Product List',
            'products'=>$this->productService->get(),
            'index'=>1,
         
        ]);
    }
    public function create(Request $request){
        $category = DB::table('categories')->select('*')->get();
        return view('admin.product.add',[
            'title'=>'Add product',
           'category'=> $category
        ]);
    }
    public function store(Request $request){
       // dd($request->all());
        $this->productService->create($request);
        Session::flash('success','Created!');
        return redirect()->route('product.list');
      
    }
    public function destroy(Request $request){
        $result = $this->productService->destroy($request);

        if ($result){
            return response()->json([
                'error' => false ,
                'message'=> 'Delete Success!'

            ]);
        }
        return response()->json([
            'error' => true ,
            'message'=> 'Delete Failed!'

        ]);
    }
    public function show(Product $product){ 
        $category= Category::all();
        return view('admin.product.edit',[
            'title'=> 'edit'.$product->name,
            'product'=>$product,
            'category'=>$category
        ]);

    }
    public function update(Product $product,Request $request){
       //    dd($request->all());
        $this->productService->update($request,$product);
        Session::flash('success','Updated!');
        return redirect('admin/products/list');
    }
   
    
}

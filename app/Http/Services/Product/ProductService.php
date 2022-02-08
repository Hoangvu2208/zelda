<?php 

namespace App\Http\Services\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductService{
    public function get(){
        return Product::orderbyDesc('id')->paginate(5);
    }
    public function create($request){
        if($request->has('file_uploads')){
            $file = $request->file_uploads;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('images'),$file_name);
            
            $product = new Product([
                'name'=>(string) $request->input('name'),
                'images'=>(string) $file_name,
                'category_id'=>(int) $request->input('category_id'),
                'price'=>(int) $request->input('price'),
                'contents'=>(string) $request->input('content'),
    
            ]);
            $product->save();
        }else{
            return Session::flash('error','Upload failed!');
        }
        

    }
    public function destroy($request){
        $id = (int) $request->input('id');
        $category = Product::where('id',$id)->first();
        
        if ($category){
            return Product::where('id',$id)->delete();
        }
        return false;
    }
    public function update($request,$product){
        //validate
        if($request->has('file_uploads')){
            $file = $request->file_uploads;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('images'),$file_name);
            //update
                $product->name = $request->input('name');
                $product->images = $file_name;
                $product->category_id = $request->input('category_id');
                $product->price =$request->input('price');
                $product->contents = $request->input('content');
    
            //save
            $product->save();
        }else{
            return Session::flash('error','Update failed!');
        }

    }
   
}
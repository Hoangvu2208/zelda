<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function searchCat(Category $category){
        
        
        $product = Product::where('category_id',$category->id)->get();
        
        return view('main.result',[
            'title'=>'Products Of  '. $category->name,
            'category'=>$category,
            
            'product'=>$product
        ]);
      
    }
    public function search (Request $request){
        $search = $request->input('keyword');
        $product = Product::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('id', 'LIKE', "%{$search}%")
        ->orWhere('price', 'LIKE', "%{$search}%")
        ->orderBy('id')->paginate(10);
       // dd($product);
        return view('main.search',[
            'title'=>'results',
            
            'product'=>$product
        ]);
    }
}

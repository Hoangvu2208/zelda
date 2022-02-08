<?php
namespace App\Http\Services\Menu;

use App\Models\Category;
use Illuminate\Support\Facades\Session;

class MenuService{
    public function get(){
        return Category::orderbyDesc('id')->paginate(15);
    }
    public function create($request){
        try {
           Category::create([
               'name'=>(string) $request->input('name')
           ]);
           Session::flash('success','Create Success');

        }
        catch(\Exception $err) {
            Session::flash('error','Something wrong, please try again later!');
            return false;
        }
        return true;
    }
    public function destroy($request){
        $id = (int) $request->input('id');
        $category = Category::where('id',$id)->first();
        
        if ($category){
            return Category::where('id',$id)->delete();
        }
        return false;
    }
    public function update($request,$category){
        $category->name = $request->input('name');
        $category->save();
    }
    
}

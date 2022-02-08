<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller

{
    protected $menuService;
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }
    
    public function create(){
        return view('admin.menu.add',[
            'title'=> 'Add Category'

        ]);
        
    }
    public function store(Request $request){
       $result =  $this->menuService->create($request);
       return redirect()->back(); 
    }
    public function index(){
        return view('admin.menu.list',[
            'title'=> 'Category List',
            'categories'=>$this->menuService->get(),
            'index'=>1
        ]);
    }
    public function destroy(Request $request){
        $result = $this->menuService->destroy($request);

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
        return redirect()->back();
    }
    public function show(Category $category){
        return view('admin.menu.edit',[
            'title' => 'Edit Category  '.$category->name,
            'category'=>$category
        ]);
    }
    public function update(Category $category,Request $request){
        $this->menuService->update($request,$category);
        Session::flash('success','Updated!');
        return redirect('admin/menus/list');
        
    }
    
    
}

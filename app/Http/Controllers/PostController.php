<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Post\PostService;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

class PostController extends Controller

{
    protected $postService;
    public function __construct( PostService $postService)
    {
        $this->postService = $postService;
    }
    public function index(){
       $posts= Post::all();
        return view('admin.post.list',[
            'title'=>'Post List',
            'posts' => $posts,
            'index'=>1
        ]);
    }
    public function create(){
        return view('admin.post.add',[
            'title'=>'Add Post'
        ]);
    }
    public function store(Request $request){
        $this->postService->create($request);
        Session::flash('success','Created!');
        return redirect()->route('post.list');

    }
    public function destroy(Request $request){
        $result = $this->postService->destroy($request);

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
    public function show(Post $post){ 
      //  $post = Post::all();
       // dd($post->title);
        return view('admin.post.edit',[
            'title'=> 'edit   '.$post->title,
            'post'=>$post
            
        ]);

    }
    public function update(Post $post,Request $request){
        //    dd($request->all());
         $this->postService->update($request,$post);
         Session::flash('success','Updated!');
         return redirect('admin/posts/list');
     }
}

<?php 

namespace App\Http\Services\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Session;

class PostService 
{
    public function create($request){
        if($request->has('file_uploads')){
            $file = $request->file_uploads;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('images'),$file_name);
            
            $post = new Post([
                'title'=>(string) $request->input('title'),
                'image'=>(string) $file_name,
                
                'content'=>(string) $request->input('content'),
    
            ]);
            $post->save();
        }else{
            return Session::flash('error','Upload failed!');
        }

    }
    public function destroy($request){
        $id = (int) $request->input('id');
        $post = Post::where('id',$id)->first();
        
        if ($post){
            return Post::where('id',$id)->delete();
        }
        return false;
    }
    public function update($request,$post){
        //validate
        if ($request->has('file_uploads')) {
            $file = $request->file_uploads;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('images'), $file_name);
            //update
            $post->title = $request->input('title');
            $post->image = $file_name;               
            $post->content = $request->input('content');
    
            //save
            $post->save();
        } else {
            return Session::flash('error', 'Update failed!');
        }
    }
}



<?php

namespace App\Http\Controllers;



use App\Models\Post;
use App\Http\Requests;
use Illuminate\Http\Request;

class PostsAdminController extends Controller
{
    private $post;
    public  function __construct( Post $post){

        $this->post = $post;

    }

    public  function  index(){
        $posts = $this->post->paginate(8);
        return view('admin.posts.index',compact('posts'));
    }

   public  function create(){
       return view('admin.posts.create');
   }
    public function save(Requests\PostRequest $request){
        $this->post->create($request->all());
        return redirect()->route('admin.posts.index');
    }

    public  function edit($id){
       $post = $this->post->find($id);
        return view('admin.posts.edit',compact('post'));
    }
    public function update($id, Requests\PostRequest $request){

        $post =  $this->post->find($id);
        $post->update($request->all());
        return redirect()->route('admin.posts.index');
    }

    public  function destroy($id){
          $this->post->find($id)->delete();
        return redirect()->route('admin.posts.index');
    }

}

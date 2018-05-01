<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class postController extends Controller
{
    //list
    public function index(){

        $posts = Post::orderBy('created_at','desc')->paginate(6);//now show page
       return view('post/index',compact('posts'));
       // return view('layout/main');
    }

    //detail
    public  function show(Post $post){
        return view('post/show',compact('post'));
    }


    public  function create(){
        return view('post/create');
    }

    public  function store(){
        /*$post = new Post();
        $post->title = request('title');
        $post->content=request('content');*/
        //validata
        $this->validate(request(),[
            'title'=>'required|string|max:100|min:5',
            'content'=>'required|string|min:10'
        ]);
        //Auth::id()
        $user_id = \Auth::id();
        $param = array_merge(request(['title','content']),compact('user_id'));
        $post= Post::create($param);

         return redirect('posts');
    }

    public  function update(Post $post){
        //TODO  AUTH  $this->authorize('update',$post);
        $this->validate(request(),[
            'title'=>'required|string|max:100|min:5',
            'content'=>'required|string|min:10'
        ]);
         $this->authorize('update',$post);

        $post->title = request('title');
        $post->content=request('content');
        $post->save();
        return redirect("posts/{$post->id}");
    }

    public  function edit(Post $post){
        return view('post/edit' , compact('post'));
    }

    public  function delete(Post $post){
        //TODO AUTH  $this->authorize('delete',$post);
        $post->delete();
        $this->authorize('update',$post);
        return redirect('posts');
    }

    //commmet
    public function comment(Post $post){
        //dd(request()->all());die;
    $this->validate(request(),[
               'content'=>'required|min:3|'
    ]);
        $comment=new Comment();
        $comment->user_id=\Auth::id();
        $comment->content=request('content');
        //dd($comment);die;
        $post->comment()->save($comment);
        return back();

}
}

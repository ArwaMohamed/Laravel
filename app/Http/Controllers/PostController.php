<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Route;
use Illuminate\Support\Facades\Redirect;
// use App\Http\Controllers\Route;
// use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Route;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('posts.post',["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Post::create([
        "name"=>$request->name,
        "tiltle"=>$request->tiltle,
        "discription"=>$request->discription,
    ]);
    // return view('posts.post');
     return redirect::to( 'posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view("posts.show",$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view("posts.edit",$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post =Post::find($id);
        $post->name=$request->name;
        $post->tiltle=$request->tiltle;
        $post->discription=$request->discription;
        $post->save();
        // return view('posts.post');
        return redirect::to( 'posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Post::find($id)->delete();
       return redirect::to( 'posts');

    }
}

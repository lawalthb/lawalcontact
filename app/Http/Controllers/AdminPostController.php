<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
       // $user = User::All();
       // $posts = Post::where("user_id", "=", $user->id);
       // $posts = Post::all();
       $posts = Post::all();
        //$posts = Post::orderBy('created_at','desc')->where('user_id', 5)->get();
        return view('admin.posts.postlist', ['posts'=>$posts]);

        //$posts =Post::with('users')->get();
        //return view('admin.posts.postlist', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         $request->validate([
            'title'=>'required',
            'body'=>'required',
            'category'=>'required'
        ]);    
       
         $post = new Post([
            'user_id' => Auth::user()->id,
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'category_id' => $request->get('category')
            
        ]);
        $post->save();
        return redirect('/admin')->with('success', 'Post saved!');
        



     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

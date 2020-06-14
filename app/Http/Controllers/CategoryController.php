<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.create');
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
            'name'=>'required'
            
        ]);    
       
         $category = new Category([
            
            'name' => $request->get('name')
            
        ]);
        $category->save();
        return redirect('/admin')->with('success', 'Category saved!');
        

       

     }

     public function posts(){
        return $this->hasMany(Post::class);
    }
}

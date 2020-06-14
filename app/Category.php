<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $fillable = ['name'];

     public function index()
    {
        //


        $categories = Category::all();


        return view('admin.categories.index', compact('categories'));


    }

    
}

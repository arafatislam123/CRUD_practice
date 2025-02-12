<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
        // return "Create post";
    }
    public function ourfilestore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:posts|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);
        $post = new Post();
        $post->name = $request->name;
        $post->description = $request->description;
   
         $post->image = $request->image;
    
     

        $post->save();
        return redirect()->route('home')->with('success', 'Item created successfully!');
    }
}

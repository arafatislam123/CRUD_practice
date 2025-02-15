<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('welcome', compact('posts'));
    }
    public function create()
    {
        return view('create');
        // return "Create post";
    }
    public function updateData(Request $request, $id)
    {
        $post = Post::find($id);
        $validated = $request->validate([
            'name' => 'required|unique:posts|max:255',
            'description' => 'required',
            // 'image' => 'required',
        ]);
        // $post = new Post();
        $post->name = $request->name;
        $post->description = $request->description;

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $img_name = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('uploads/'), $img_name);
            $img_url = 'uploads/' . $img_name;
            $post->image = $img_url;
            $post->save();
            return redirect()->route('home')->with('success', 'Item updated successfully!');

        

    }
}
    public function editData($id)
    {
        $post = Post::find($id);
      
        return view('edit',['ourPost'=>$post]);
    }
    
    public function ourfilestore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:posts|max:255',
            'description' => 'required',
            // 'image' => 'required',
        ]);
        $post = new Post();
        $post->name = $request->name;
        $post->description = $request->description;

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $img_name = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('uploads/'), $img_name);
            $img_url = 'uploads/' . $img_name;
            $post->image = $img_url;
        }
        $post->save();

        return redirect()->route('home')->with('success', 'Item created successfully!');
    }
    public function deleteData($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home')->with('success', 'Item deleted successfully!');
    }
}

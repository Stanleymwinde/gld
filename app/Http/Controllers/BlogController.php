<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.blogs.create', compact('categories'));
    }

    // public function singleBlog(Blog $blog)
    // {

    //     $categories = Category::all();

    //     return view('admin.blogs.single', compact('blog', 'categories'));
    // }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required | image',
            'body' => 'required',
            'category_id' => 'required'
        ]);


        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        if (Blog::latest()->first() !== null) {
            $blogId = Blog::latest()->first()->id + 1;
        } else {
            $blogId = 1;
        }

        $slug = Str::slug($title, '-') . '-' . $blogId;
        $user_id = Auth::user()->id;
        $body = $request->input('body');

        //File upload
        $imagePath = 'storage/' . $request->file('image')->store('blogsImages', 'public');

        $blog = new Blog();
        $blog->title = $title;
        $blog->category_id = $category_id;
        $blog->slug = $slug;
        $blog->description = $description;
        $blog->user_id = $user_id;
        $blog->body = $body;
        $blog->imagePath = $imagePath;

        $blog->save();

        return redirect()->back()->with('status', 'Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function showBlogs()
    {
        $categories = Category::all();
        $blogs = Blog::latest()->paginate(5);

        return view('admin.blogs.show', compact('blogs', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.blogs.edit', compact('categories', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateBlog(Request $request, Blog $blog)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required | image',

            'body' => 'required'
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $category_id = $request->input('category_id');
        $blogId = $blog->id;
        $slug = Str::slug($title, '-') . '-' . $blogId;
        $body = $request->input('body');

        //File upload
        $imagePath = 'storage/' . $request->file('image')->store('blogsImages', 'public');


        $blog->title = $title;
        $blog->slug = $slug;
        $blog->description = $description;
        $blog->body = $body;
        $blog->category_id = $category_id;
        $blog->imagePath = $imagePath;

        $blog->save();

        return redirect()->back()->with('status', 'blog Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('status', 'Blog Delete Successfully');
    }
}

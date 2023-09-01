<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Property;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $properties = Property::latest()->paginate(3);
        $categories = Category::all();
        $blogs = Blog::latest()->paginate(3);
        return view('User.index', compact('properties', 'categories', 'blogs'));
    }

    public function about()
    {
        return view('User.about');
    }
    public function properties()
    {
        $categories = Category::all();
        $properties = Property::latest()->paginate(9);
        return view('User.properties', compact('properties', 'categories'));
    }

    public function blog()
    {
        $blogs = Blog::latest()->paginate(8);
        return view('User.blog', compact('blogs'));
    }

    public function blog_single($blogId)
    {
        $categories = Category::all();
        $blog = Blog::findOrFail($blogId); // Retrieve the selected blog by ID
        $recentBlogs = Blog::orderBy('created_at', 'desc')->take(5)->get(); // Retrieve the most recent 5 blog posts

        return view('User.blog-single', compact('blog', 'categories', 'recentBlogs'));
    }


    public function contact()
    {
        return view('User.contact');
    }

    public function services()
    {
        return view('User.services');
    }

    public function agent()
    {
        return view('User.agent');
    }
    public function prop_single($propertyId)
    {
        // Retrieve the property by its ID (assuming you have a Property model)
        $property = Property::findOrFail($propertyId);

        return view('User.properties-single', compact('property'));
    }
}

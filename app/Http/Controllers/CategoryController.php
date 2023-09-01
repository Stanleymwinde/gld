<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function createCategory()
    {
        $loggedInUser = Auth::user();
        return view('admin.categories.create', compact('loggedInUser'));
    }

    public function showCategory()
    {
        $loggedInUser = Auth::user();
        $categories = Category::all();
        return view('admin.categories.show', compact('categories', 'loggedInUser'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required | unique:categories',
        ]);

        $name = $request->input('name');
        $category = new Category();
        $category->name = $name;

        $category->save();

        return redirect()->back()->with('status', 'Category Created Successfully');
    }

    public function editCategory(Category $category)
    {
        $loggedInUser = Auth::user();
        return view('admin.categories.edit', compact('category', 'loggedInUser'));
    }

    public function updateCategory(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required | unique:categories',
        ]);

        $name = $request->input('name');

        $category->name = $name;

        $category->save();

        return redirect(route('admin.categories.show'))->with('status', 'Category Edited Successfully');
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();

        return redirect()->back()->with('status', 'Category Deleted Successfully');
    }
}

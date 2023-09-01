<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function createCategory()
    {
        return view('admin.categories.create');
    }

    public function showCategory()
    {
        $categories = Category::all();
        return view('admin.categories.show', compact('categories'));
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
        return view('admin.categories.edit', compact('category'));
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

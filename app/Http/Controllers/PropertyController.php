<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    public function create()
    {
        $loggedInUser = Auth::user();
        $categories = Category::all();

        return view('admin.Property.create', compact('categories', 'loggedInUser'));
    }

    public function storeProperty(Request $request)
    {
        try {


            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'category_id' => 'required|exists:categories,id',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'location' => 'required|string|max:255',
                'price' => 'required|numeric',
                'bedroom' => 'required|numeric',

            ]);

            $property = new Property();
            $property->name = $request->input('name');
            $property->description = $request->input('description');
            $property->category_id = $request->input('category_id');
            $property->location = $request->input('location');
            $property->price = $request->input('price');
            $property->bedroom = $request->input('bedroom');
            $property->status = true;
            $property->user_id = Auth::user()->id;


            // Generate unique slug
            $propertyId = Property::max('id') + 1;
            $slug = Str::slug($property->name, '-') . '-' . $propertyId;
            $property->slug = $slug;

            // Handle image upload
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('property_images', 'public');
                $property->image = $imagePath;
            }

            $property->save();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return redirect()->back()->with('status', 'Property added successfully.');
    }
    public function showProperty()
    {
        $loggedInUser = Auth::user();
        $categories = Category::all();
        $properties = Property::latest()->paginate(5);

        return view('admin.Property.show', compact('properties', 'categories', 'loggedInUser'));
    }

    public function edit(Property $property)
    {
        $loggedInUser = Auth::user();
        $data = Auth::User();
        $categories = Category::all();
        return view('admin.Property.edit', compact('categories', 'property', 'data', 'loggedInUser'));
    }

    public function updateProperty(Request $request, Property $property)
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
        $propertyId = $property->id;
        $slug = Str::slug($title, '-') . '-' . $propertyId;
        $body = $request->input('body');

        //File upload
        $imagePath = 'storage/' . $request->file('image')->store('PropertyImages', 'public');


        $property->title = $title;
        $property->slug = $slug;
        $property->description = $description;
        $property->body = $body;
        $property->category_id = $category_id;
        $property->imagePath = $imagePath;

        $property->save();

        return redirect()->back()->with('status', 'Property Edited Successfully');
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->back()->with('status', 'Property Delete Successfully');
    }
}

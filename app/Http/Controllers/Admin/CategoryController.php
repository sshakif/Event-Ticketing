<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CategoryController extends Controller
{
    // Display all About sections
    public function index()
    {
        $categories = Category::get();

        return view('admin.backend.category.categoryList', compact('categories'));
    }


    // Store a new About section
    public function Store(Request $request)
    {

        $validate=  $request->validate([
            'name' => 'required|string|max:255',
            'note' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,svg|max:10240',

        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $mime_type = $image->getClientMimeType();
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();


            if (!file_exists(public_path('upload/category'))) {
                mkdir(public_path('upload/category'), 0777, true);
            }

            $image->move(public_path('upload/category'), $imageName);
            $imagePath = 'upload/category/' . $imageName;
        }

        Category::create([
            'name' => $request->name,
            'note' => $request->note,
            'file_path'=>$request->$imagePath,
            'mime_type'=>$mime_type,
            'created_by'=>Auth::user()->id


        ]);

        return redirect()->route('category.list')->with('success', 'Category added successfully!');
    }


    // Update an existing About section
    public function Edit(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'note' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,svg|max:2048',
            'updated_by'=>Auth::user()->id
        ]);

        $imagePath = $category->file_path;

        if ($request->file('image')) {
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = hexdec(uniqid()) . '.' . $extension;

            if (in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $manager = new ImageManager(new Driver());
                $img = $manager->read($image);
                $img->scale(300, 300)->save(public_path('upload/about_images/' . $imageName));
            } else if ($extension === 'svg') {
                $image->move(public_path('upload/about_images'), $imageName);
            }

            $imagePath = 'upload/about_images/' . $imageName;
        }

        $category->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'updated_by'=>23
        ]);

        return redirect()->route('category.list')->with('success', 'Category updated successfully!');
    }

    public function Destroy($id)
    {
        // Find the 'About' section by ID
        $category = Category::find($id);

        if ($category) {
            // Get the image path
            $img = $category->image;

            // Check if the image file exists before attempting to delete it
            if ($img && file_exists(public_path($img))) {
                unlink(public_path($img));
            }

            // Delete the database record
            $category->delete();

            // Success notification
            return redirect()->route('category.list')->with('success' , "Category deleted successfully");
        } else {
            // Error notification if the 'About' section is not found
         return redirect()->route('category.list')->with('error' , "Somthing went error during delete");
        }

        // Redirect back with the notification

    }
}

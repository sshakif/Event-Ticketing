<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AboutController extends Controller
{
    // Display all About sections
    public function AllAbouts()
    {
        $abouts = About::all();
        return view('admin.backend.abouts.all_about', compact('abouts'));
    }

    // Show the form for creating a new About section
    public function AddAbouts()
    {
        return view('admin.backend.abouts.add_abouts');
    }

    // Store a new About section
    public function StoreAbouts(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,svg|max:10240',
            'video_url' => 'nullable|url',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();


            if (!file_exists(public_path('upload/about_images'))) {
                mkdir(public_path('upload/about_images'), 0777, true);
            }

            $image->move(public_path('upload/about_images'), $imageName);
            $imagePath = 'upload/about_images/' . $imageName;
        }

        $videoUrl = $request->video_url;
        if ($videoUrl) {
            if (strpos($videoUrl, 'youtube.com/watch?v=') !== false) {
                $videoUrl = str_replace("watch?v=", "embed/", $videoUrl);
            } elseif (strpos($videoUrl, 'youtu.be/') !== false) {
                $videoUrl = str_replace("youtu.be/", "www.youtube.com/embed/", $videoUrl);
            }
        }

        About::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'video_url' => $request->video_url,
        ]);

        return redirect()->route('all.abouts')->with('success', 'About section added successfully!');
    }

    // Show the form for editing the About section
    public function EditAbouts($id)
    {
        $about = About::findOrFail($id);
        return view('admin.backend.abouts.edit_abouts', compact('about'));
    }

    // Update an existing About section
    public function UpdateAbouts(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,svg|max:2048',
            'video_url' => 'nullable|url',
        ]);

        $imagePath = $about->image;

        if ($request->file('image')) {
            if ($about->image && file_exists(public_path($about->image))) {
                unlink(public_path($about->image));
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


        $videoUrl = $request->video_url;
        if ($videoUrl) {
            if (strpos($videoUrl, 'youtube.com/watch?v=') !== false) {
                $videoUrl = str_replace("watch?v=", "embed/", $videoUrl);
            } elseif (strpos($videoUrl, 'youtu.be/') !== false) {
                $videoUrl = str_replace("youtu.be/", "www.youtube.com/embed/", $videoUrl);
            }
        }

        $about->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'video_url' => $videoUrl,
        ]);

        return redirect()->route('all.abouts')->with('success', 'About section updated successfully!');
    }

    public function DeleteAbouts($id)
    {
        // Find the 'About' section by ID
        $about = About::find($id);

        if ($about) {
            // Get the image path
            $img = $about->image;

            // Check if the image file exists before attempting to delete it
            if ($img && file_exists(public_path($img))) {
                unlink(public_path($img));
            }

            // Delete the database record
            $about->delete();

            // Success notification
            $notification = array(
                'message' => 'About Section Deleted Successfully',
                'alert-type' => 'success'
            );
        } else {
            // Error notification if the 'About' section is not found
            $notification = array(
                'message' => 'About Section Not Found',
                'alert-type' => 'error'
            );
        }

        // Redirect back with the notification
        return redirect()->back()->with($notification);
    }


}

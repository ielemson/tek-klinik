<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required',
            'banner' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        // Check if folder exists
        // $folder = 'services';

        // Ensure the folder exists in the public disk
        // if (!Storage::disk('public')->exists($folder)) {
        //     Storage::disk('public')->makeDirectory($folder);
        // }


        // Handle image upload
        // $imagePath = $request->file('banner')->store('services', 'public');
        // $img = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 800);
        // $img->save();

        if ($request->hasFile('banner')) {
        $image = $request->file('banner');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $destinationPath = public_path('assets/img/services'); // points to /public/sliders

        // Ensure the folder exists
        if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
        }

        $image->move($destinationPath, $imageName);

        $imagePath =  'assets/img/services/' . $imageName;
        }

        Service::create([
            'title' => $validated['title'],
            'status' => $validated['status'],
            'content' => $validated['content'],
            'banner' => $imagePath,
            'slug' => Str::slug($validated['title'])
        ]);

        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }

    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        // dd($request->all());
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        // // Check if folder exists
        // $folder = 'services';

        // // Ensure the folder exists in the public disk
        // if (!Storage::disk('public')->exists($folder)) {
        //     Storage::disk('public')->makeDirectory($folder);
        // }

        // // Handle image upload if exists
        // if ($request->hasFile('banner')) {
        //     $imagePath = $request->file('banner')->store('services', 'public');
        //     $img = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 800);
        //     $img->save();

        //     $service->update([
        //         'banner' => $imagePath
        //     ]);
        // }

        if ($request->hasFile('banner')) {
            // dd($request);
        $image = $request->file('banner');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $destinationPath = public_path('assets/img/services'); // points to /public/sliders

        // Ensure the folder exists
        if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
        }

        $image->move($destinationPath, $imageName);
        $imagePath = 'assets/img/services/' . $imageName;
        $service->update([
        'banner' => $imagePath
            ]);
        }

        $service->update([
        'title' => $validated['title'],
        'status' => $validated['status'],
        'content' => $validated['content'],
        'slug' => Str::slug($validated['title'])
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    public function destroy(Service $service)
    {
        // First, unlink the image from storage
        if ($service->image && Storage::exists('public/' . $service->image)) {
            Storage::delete('public/' . $service->image);
        }

        // Then, delete the service from the database
        $service->delete();

        // Redirect to index page with a success message
        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }
}
